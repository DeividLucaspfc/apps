<?php

$host="localhost";
$user="u164835603_gyde";
$password="sportclubcartola*";
$db="u164835603_gyde";

$conn= mysqli_connect($host, $user, $password, $db);
if(mysqli_connect_error()){
    echo "Falha na conexão: ".mysqli_connect_error();
}
?>