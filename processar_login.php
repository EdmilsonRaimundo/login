<?php 
include_once 'connect.php';

if(isset($_POST["btn-entrar"])){
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios WHERE nome = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "s", $nome);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $usuario = mysqli_fetch_assoc($resultado);

    if($usuario > 0){
        if($senha === $usuario["senha"]){
            header("Location: dashboard.php");
        }
    }
}
?>