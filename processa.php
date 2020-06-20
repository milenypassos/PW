<?php
	session_start();
	include 'conecta.php';

	$email= $_POST['username'];
	$senha= $_POST['pass'];

	$consulta = "SELECT * FROM cliente WHERE email = '$email' AND senha = '$senha'";
	$resultado = $conexao->query($consulta);
	$registros = $resultado->num_rows;
	$resultado_usuario = MySQLi_fetch_assoc($resultado);

	if ($registros == 1) {
		$_SESSION['id'] = $resultado_usuario ['id'];
		$_SESSION['nome'] = $resultado_usuario ['nome'];
		$_SESSION['email'] = $resultado_usuario ['email'];
	  	header('Location: restrita.php');
	}
	else{
		header('Location: index.html');
	  }  
?>