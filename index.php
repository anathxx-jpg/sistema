<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Sistema em PHP</title>
</head>

<body class="bg-blue-50">

    <header class="bg-blue-600">
        <nav class="max-w-6xl mx-auto text-white flex justify-between p-3 shadow-2xl">
        <h1 class="font-bold">Meu Sistema</h1>

        <div>
        <span>Olá, Fulano</span>

        <a href="login" class="bg-white text-blue-600 px-4 py-1 rounded">Login</a>
        <a href="login/logout.php" class="hover:underline">Sair</a>

        </div>
        
    </nav>
    </header>
   
    <main class="flex justify-center items-center h-screen h-[80vh]">
        <div class="bg-white p-8 rounded-2xl shadow text-center">
        <h2 class="text-2xl font-bold mb-4">Bem-vindo ao Sistema</h2>
        <p class="text-gray-600 mb-4">Faça login para acessar o painel</p>
        <a href="login" class="bg-blue-600 text-white pc-6 rounded-lg py-3 hover-blue-700">Ir para Login</a>
        </div>
    </main>
</body>

</html>
