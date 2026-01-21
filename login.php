<?php
session_start();

/* UTILIZADOR E PASSWORD DA APLICAÇÃO */
$utilizador_correto = "aluno";
$password_correta   = "12345";

/* Dados enviados pelo formulário */
$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $utilizador_correto && $password === $password_correta) {
    $_SESSION['utilizador'] = $username;
    header("Location: dashboard.php");
    exit;
} else {
    echo "Login inválido. <a href='index.php'>Tentar novamente</a>";
}
?>

