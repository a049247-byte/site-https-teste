<?php
session_start();

if (!isset($_SESSION['utilizador'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Área do Utilizador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard">
    <h1>Bem-vindo, <?php echo $_SESSION['utilizador']; ?>!</h1>
    <p>Esta é uma área protegida por autenticação.</p>

    <a href="logout.php">Terminar Sessão</a>
</div>

</body>
</html>
