<?php
$result = "";
$calcul = $_GET['calcul'];

if (str_contains($calcul, '+')) {
    $tblCalcul = explode("+", $calcul);
    $result =  $tblCalcul[0] + $tblCalcul[1];
} else {
    $result = "erreur";
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

<body class="px-100">
    <header>
        <nav class="flex flex-row items-center justify-center">
            <div class="p-5 container-fluid">
                <h1> CALCULATRICE </h1>
            </div>
        </nav>
    </header>
    <main class=" px-8 py-3 w-full flex flex-col justify-center items-center rounded-lg shadow-lg">
        <form action="" method="get" class="w-full">
            <div class="flex flex-col">
                <div class="container-ecran">
                    <div class=" ml-5 font-extrabold text-5xl flex items-start">
                        <input id="calcul" name="calcul" type="text" value="">
                    </div>
                    <div class="font-extrabold text-[8em] flex flex-col justify-between items-end">
                        <?php
                        if ($result !== "") {
                            echo " $result";
                        } else {
                            echo "";
                        }
                        ?>
                    </div>

                </div>
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
                            <li><button type="button" class="bouton-classique" onclick="sendKeyE()">e</button></li>
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
                            <li><button type="button" class="bouton-classique" onclick="sendKeyc()">C</button></li>
                        </ul>
                        <div>
                            <input type="submit" class="bouton-grand-double" value="="></input>
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
        document.getElementById("calcul").value = ""
    }

    function sendKeyC() {
        return alert("C")
    }

    function sendKeyPlus() {
        document.getElementById("calcul").value += "+"
    }

    function sendKeyMoins() {
        document.getElementById("calcul").value += "-"
    }

    function sendKeyMult() {
        document.getElementById("calcul").value += "*"
    }

    function sendKeyDiv() {
        document.getElementById("calcul").value += "/"
    }
</script>

</html>