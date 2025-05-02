<!--   AIDE PHP
isset
count pour length
concaténation avec .
pow(x, y )  pour puissance ^ . 
#Conditions à ajouter :
#   -Opérations avec résultat précédent : Si première value vide reprendre $total
-->

<?php
$calcul = 0; #Var du calcul tapé
$total = 0; #Var du total calcul affiché

#récup de ce qui est tapé
if (isset($_GET["calcul"])) {
    $calcul = $_GET["calcul"];
}

#erreur à vide correction => 0 . Et calcul ==""
if ($calcul == null || $calcul == "") {
    $calcul = "";
} else {
    if ($calcul[0] == "-" || $calcul[0] == "+" ||  $calcul[0] == "*" ||  $calcul[0] == "/") {
        #Condition si le total est récupérer pour d'autres calculs - Prendre première valeur
        $calcul = $total . $calcul; //pas +
        print("tot=" . $total);
        print("  calc=" . "  var calcul:" . $calcul);
    }

    #Conditions pour chaque signe
    if (str_contains($calcul, "+")) {
        $tblCalcul = explode("+", $calcul);
        $somme = 0;
        #index inutile
        foreach ($tblCalcul as $val) {
            $somme += (float)$val;
        }
        $total +=  $somme;
    } elseif (str_contains($calcul, "*")) {
        $tblCalcul = explode("*", $calcul);
        $multip = 1;
        foreach ($tblCalcul as $val) {
            $multip *= (float)$val;
        }
        $total +=  $multip;
    } elseif (str_contains($calcul, "-")) {
        $tblCalcul = explode("-", $calcul);
        $soustraction = (float)$tblCalcul[0];
        //Boucle index nécessaire
        for ($i = 1; $i < count($tblCalcul); $i++) {
            $soustraction -= (float)$tblCalcul[$i];
        }
        $total = $soustraction;
    } elseif (str_contains($calcul, "/")) {
        $tblCalcul = explode("/", $calcul);
        $divis = (float)$tblCalcul[0];
        for ($i = 1; $i < count($tblCalcul); $i++) {
            //condition div /0
            if ($tblCalcul[$i] == 0) {
                $divis = "Erreur / 0";
            } else {
                $divis /= (float)$tblCalcul[$i];
            }
        }
        $total = $divis;
    } elseif (str_contains($calcul, "^")) {
        $tblCalcul = explode("^", $calcul);
        $nombre = (float)$tblCalcul[0];
        $puissance = (float)$tblCalcul[1];
        $total = pow($nombre, $puissance);
    } else {
        $total = "Erreur";
    }
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>

<body class=" w-full px-100">
    <header>
        <nav class="flex flex-row ">
            <div class="p-5 ">
                <h1> CALCULATRICE </h1>
            </div>
        </nav>
    </header>
    <main class=" px-8 py-3 w-full max-w-[850px] flex flex-col justify-center items-center rounded-lg ">
        <form action="" method="get" class="w-full">
            <div class="flex flex-col">
                <!-- ECRAN -->
                <div class="container-ecran">
                    <div class=" ml-5 font-extrabold text-5xl flex items-start">
                        <input id="calcul" name="calcul" type="text" value="">
                    </div>
                    <div class="affichage-total font-extrabold text-[8em] flex flex-col justify-between items-end">
                        <?php
                        if ($total !== "") {
                            echo " $total";
                        } else {
                            echo "0";
                        }
                        ?>
                    </div>
                </div>
                <!-- CLAVIER -->
                <div class="w-full flex flex-row justify-between p-2 flew-wrap">
                    <div class=" container-chiffres flex flex-col border-gray-700 gap-2">
                        <ul class=" flex flex-row justify-between gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKey7()">7</button></li>
                            <li><button type="button" class=" bouton-classique" onclick="sendKey8()">8</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKey9()">9</button></li>
                        </ul>
                        <ul class=" flex flex-row justify-between gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKey4()">4</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKey5()">5</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKey6()">6</button></li>
                        </ul>

                        <ul class=" flex flex-row justify-between gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKey1()">1</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKey2()">2</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKey3()">3</button></li>
                        </ul>

                        <ul class=" flex flex-row justify-between gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKeyDec()">,</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKey0()">0</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKeyP()">^</button></li>
                        </ul>
                    </div>
                    <div class="container-signes flex flex-col gap-2">
                        <ul class="flex flex-row gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKeyPlus()">+</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKeyMoins()">-</button></li>
                        </ul>
                        <ul class=" flex flex-row gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKeyMult()">*</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKeyDiv()">/</button></li>
                        </ul>
                        <ul class=" flex flex-row gap-2">
                            <li><button type="button" class="bouton-classique" onclick="sendKeyCE()">CE</button></li>
                            <li><button type="button" class="bouton-classique" onclick="sendKeyC()">C</button></li>
                        </ul>
                        <div>
                            <input id="submit-bouton-egale" type="submit" class="bouton-grand-double" value="="></input>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
</body>
<footer>
</footer>
<script>
    function sendKey1() {
        document.getElementById("calcul").value += "1";
    }

    function sendKey2() {
        document.getElementById("calcul").value += "2";
    }

    function sendKey3() {
        document.getElementById("calcul").value += "3";
    }

    function sendKey4() {
        document.getElementById("calcul").value += "4";
    }

    function sendKey5() {
        document.getElementById("calcul").value += "5";
    }

    function sendKey6() {
        document.getElementById("calcul").value += "6";
    }

    function sendKey7() {
        document.getElementById("calcul").value += "7";
    }

    function sendKey8() {
        document.getElementById("calcul").value += "8";
    }

    function sendKey9() {
        document.getElementById("calcul").value += "9";
    }

    function sendKey0() {
        document.getElementById("calcul").value += "0";
    }

    function sendKeyDec() {
        document.getElementById("calcul").value += ",";
    }

    function sendKeyCE() {
        document.getElementById("calcul").value = "";
    }
    function sendKeyP() {
        document.getElementById("calcul").value += "^";
    }
    function sendKeyC() {
        document.getElementById("calcul").value = "";
        document.querySelector(".affichage-total").innertText = ""; // reinit. affichage résultat à 0
        document.querySelector('form').submit(); //Réinitialise affichage de total
    }

    function sendKeyPlus() {
        document.getElementById("calcul").value += "+";
    }

    function sendKeyMoins() {
        document.getElementById("calcul").value += "-";
    }

    function sendKeyMult() {
        document.getElementById("calcul").value += "*";
    }

    function sendKeyDiv() {
        document.getElementById("calcul").value += "/";
    }
</script>

</html>