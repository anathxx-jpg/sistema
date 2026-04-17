<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($email == "senac@aulaphp.com.br" && $senha == "12345678") {
    
    $_SESSION['logado'] = true;
    $_SESSION[ 'nome'] = "Edson Bispo";
    
    header("Location: ../admin/dashboard.php");
} else {
   echo "E-mail ou Senha Invalido!";
   echo "<br>";
   //echo "<a href='index.php'>Voltar para Login</a>";
   //echo "<br>";
   echo "<a href='javascript:history.back()'>Voltar para Login</a>"; 
}


