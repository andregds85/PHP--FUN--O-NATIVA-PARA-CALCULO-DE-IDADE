<?php

$host = 'localhost';
$user = 'root';
$pass = 'root';
$db   = 'calcula';
 
// conexão e seleção do banco de dados
$con = mysqlI_connect($host, $user, $pass, $db);
 

mysqli_close($con);
?>