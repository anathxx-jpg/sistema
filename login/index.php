<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>
 
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-6 shadow w-[300px] rounded-xl">
        <h1 class="text-2xl font-bold text-center mb-3">Login</h1>
        <p class="text-sm text-gray-600 mb-5 text-center">Entre com seus dados para acessar o sistema.</p>
        <form action="autenticacao.php" method="post">
            <div>
                <label class="block">E-mail</label>
                <input class="w-full border border-gray-500 rounded p-1" type="text" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="mb-3">
                <label class="block">Senha</label>
                <input class="w-full border border-gray-500 rounded p-1" type="password" name="senha" placeholder="********">
            </div>
            <button class="w-full bg-blue-500 p-1 text-white rounded hover:bg-blue-700 transition duration-500" type=" submit">
                Entrar
            </button>
        </form>
    </div>
</body>
 
</html>