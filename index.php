<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body> 
    <header>
        <nav class="flex flex-row items-center justify-center">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">NAV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav"></ul>
            </div>
        </nav>
    </header>
    <main class=" p-8 w-full flex flex-col justify-center items-center">
        <h1 class="items-center text-center">CALCULATRICE</h1>
        <div class= "w-full d-flex flex-col justify-center items-center">
            <div class=" flex flex-col justify-center items-center">
                <div class="h-75 w-full border border-gray-700 text-center bg-[#636363]" >
                    ecran
                </div>
                <div class="w-full flex flex-row justify-between p-10 gap-10">
                    <div class="w-75 flex flex-col border-gray-700 gap-5"> 
                        <ul class= " flex flex-row justify-between gap-7 ">
                            <li class="border border-gray-700- p-10">1</li>
                            <li class="border border-gray-700- p-10">2</li>
                            <li class="border border-gray-700- p-10">3</li>
                        </ul>
                        <ul class= " flex flex-row justify-between gap-7 ">
                            <li class="border border-gray-700- p-10">4</li>
                            <li class="border border-gray-700- p-10">5</li>
                            <li class="border border-gray-700- p-10">6</li>
                        </ul>
                        <ul class= " flex flex-row justify-between gap-7 ">
                            <li class="border border-gray-700- p-10">7</li>
                            <li class="border border-gray-700- p-10">8</li>
                            <li class="border border-gray-700- p-10">9</li>
                        </ul>
                        <li class="border border-gray-700- p-10">0</li>
                    </div>
                    <div class=" w-20 flex flex-col gap-5"> 
                        <ul  class=" w-full flex flex-row justify-center gap-5">
                            <li class="border border-gray-700- p-[40px] m-auto">+</li>
                            <li class="border border-gray-700- p-[40px] m-auto">-</li>
                        </ul>
                        <ul  class=" w-full flex flex-row justify-center gap-5">
                            <li class="border border-gray-700- p-[40px] m-auto">*</li>
                            <li class="border border-gray-700- p-[40px] m-auto">/</li> 
                        </ul>
                    </div>
                </div> 
            </div>   
        </div>
</main>
</body> 
</html>