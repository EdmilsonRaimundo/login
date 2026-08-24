<?php 
$connection = mysqli_connect(
    $hostname = "localhost",
    $username = "root",
    $password = "",
    $data_base = "sistema",
);
if(!$connection){
    die("Erro". mysqli_connect_error());
}
?>