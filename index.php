<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Login - Aplicação Segura</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">
    <h1>Aplicação Segura</h1>
    <p>Login do Utilizador</p>

    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Utilizador" required>
        <input type="password" name="password" placeholder="Palavra-passe" required>
        <button type="submit">Entrar</button>
    </form>
</div>

</body>
</html>
