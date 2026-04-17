<?php 

 session_start();

 if(!isset($_SESSION['logado'])) {
   header("Location: ../");
 }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Sistema em PHP</title>
</head>

<body class="bg-gray-100">

<header class="bg-blue-600">
    <nav class="max-w-6xl mx-auto text-white flex justify-between p-3 shadow-2xl">
        <h1 class="font-bold">Dashboard</h1>

        <div>
            <a href="../login/logout.php" class="hover:underline">Sair</a>
        </div>
    </nav>
</header>

<main class="p-2 max-w-6xl mx-auto mt-3">
    <div class="text-xl font-bold text-blue-600">Bem-vindo, <?= $_SESSION['nome'] ?>
</div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-5">
        <div class="bg-white p-4 rounded-xl shadow-lg hover:scale-105">
            <h2 class="font-semibold">Usuários</h2>
            <p>10</p>
        </div>

        <div class="bg-white p-4 rounded-xl shadow-lg hover:scale-105">
            <h2 class="font-semibold">Notícias Publicadas</h2>
            <p>15</p>
        </div>

        <div class="font-sans bg-white p-4 rounded-xl shadow-lg hover:scale-105">
            <h2 class="font-semibold">Relatórios</h2>
        </div>
    </div>
</main>

</body>
</html>