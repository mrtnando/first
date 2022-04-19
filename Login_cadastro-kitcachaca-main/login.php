<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: main.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT `e-mail` FROM `cliente` WHERE `e-mail` = '${usuario}' AND `senha` = '${senha}';";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: painel.php'); //o location aqui manda para a página inicial após login correto
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: main.php'); //retorna para pagina de login após login errado
	exit();
}