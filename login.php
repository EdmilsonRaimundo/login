<?php 
include_once "connect.php";

if(isset($_POST["btn-entrar"])){
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    $sql = "SELECT nome, senha 
    FROM usuarios 
    WHERE nome = '$nome' AND senha = '$senha'";
    $resultado = mysqli_query($connection, $sql);
    $usuario = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado) > 0){
        if($senha === $usuario["senha"]){
            header("Location: dashboard.php");
        }else{
            echo "Senha incorreta.";
        }
    }else{
        echo "Utilizador não encontrado.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body{
        background-color: #f4f4f4;
        height: 100vh;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, Helvetica, sans-serif;

    }
    .login-box{
        background-color: white;
        width: 300px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        display: grid;
        gap: 16px;
    }
    form{
        display: grid;
        gap: 8px;
    }
    h2 {
        color: #333;
        text-align: center;
    }
    .login-box form input{
        padding: 10px;
        border-radius: 4px;
        border: 1px solid #ccc;
        outline: none;
    }
    .login-box form input:focus{
        border-color: #004853;
    }
    .login-box form input[type="submit"]{
        background-color: #004853;
        color: #fff;
        font-size: 16px;
    }
    .login-box form input[type="submit"]:hover{
        cursor: pointer;
        opacity: 0.9;
    }
</style>
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