<?php
	session_start();

	if ((!isset($_SESSION['id'])==true)&&
		(!isset($_SESSION['nome'])==true)&&
		(!isset($_SESSION['email'])==true)) {

		unset($_SESSION['id']);
		unset($_SESSION['nome']);
		unset($_SESSION['email']);
		header('Location: index.html');
	}

	echo "Bem vindo a uma página restrita";
	echo "<br>";
	echo "(mas nem tão restrita por enquanto!)";
?>
<a href="sair.php">Sair</a>