<?php
$servidor = "localhost";
$username = "root";
$password = "";
$database = "prova";

$connection = mysqli_connect($servidor, $username, $password, $database);
if (!$connection) {
	echo "Não conectado";	
}

?>