<?php
session_start();
include ('bd/conexao.php');

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	# code...
	header('Location: index_login.html');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}') ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
	# code...
	$_SESSION['usuario'] = $usuario;
	header('Location: sistquestoes2/index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index_login.html');
	exit();
}


?>