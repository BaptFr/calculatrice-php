<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body> 
    <header>
        <nav class="flex flex-row items-center justify-center">
            <div class="p-5 container-fluid">
                <h1> CALCULATRICE </h1>
            </div>
        </nav>
    </header>
    <main class=" px-8 py-3 w-full flex flex-col justify-center items-center border border-gray-1000">
        <div class= "w-full d-flex flex-col justify-center items-center">
            <div class=" flex flex-col justify-center items-center">
                <div class="container-ecran" >
                     <div class= "w-75 font-extrabold text-9xl">
                        7
                    </div>
                    <div class= "w-25 font-extrabold text-5xl flex flex-row">
                        3 + 4
                    </div>
                 
                </div>
                <div class="w-full flex flex-row justify-between p-2 flew-wrap">
                    <div class=" container-chiffres flex flex-col border-gray-700 gap-2"> 
                        <ul class= " flex flex-row justify-between gap-2">
                            <button class="bouton-classique">7</button> 
                            <button class="bouton-classique">8</button> 
                            <button class="bouton-classique">9</button> 
                        </ul>
                        <ul class= " flex flex-row justify-between gap-2">
                            <button class="bouton-classique">4</button>
                            <button class="bouton-classique">5</button> 
                            <button class="bouton-classique">6</button> 
                        </ul>
                    
                        <ul class= " flex flex-row justify-between gap-2">
                            <button class="bouton-classique">1</button> 
                            <button class="bouton-classique">2</button> 
                            <button class="bouton-classique">3</button> 
                        </ul>
                        
                        <ul class=" flex flex-row justify-between gap-2">
                            <button class="bouton-classique">,</button>
                            <button class="bouton-classique ">0</button>
                            <button class="bouton-classique ">e</button>
                        </ul>
                    </div>
                    <div class="container-signes flex flex-col gap-4"> 
                        <ul  class="flex flex-row gap-2">
                            <button class="bouton-grand">+</button>
                            <button class="bouton-grand">-</button>
                        </ul>
                        <ul  class=" flex flex-row gap-2">
                            <button class=" bouton-grand">*</button>
                            <button class="bouton-grand">/</button> 
                        </ul>
                        <ul  class=" flex flex-row gap-2">
                            <button class=" bouton-grand">CE</button>
                            <button class="bouton-grand">C</button> 
                        </ul>
                        <button class=" bouton-grand-double ">=</button>
                    </div>
                </div> 
            </div>   
        </div>
</main>
</body> 
</html>