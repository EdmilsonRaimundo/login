<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$data_base = "sistema";
$connection = mysqli_connect($hostname, $username, $password, $data_base);
if(!$connection){
    die("Erro de conexão!"); 
}
?>