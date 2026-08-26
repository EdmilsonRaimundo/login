<?php 
include_once 'processar_login.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="login.php" method="post">         
            <input type="text" name="nome" placeholder="Name">
            <input type="password" name="senha" placeholder="Password">
            <input type="submit" name="btn-entrar" value="Entrar">
        </form>
    </div>
</body>
</html>