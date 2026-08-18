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
<body>
    <div class="box-login">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <input type="text" name="nome" placeholder="Name">
            <input type="password" name="senha" placeholder="Password">
            <button type="submit" name="btn-entrar">Entrar</button>
        </form>
    </div>
</body>
</html>