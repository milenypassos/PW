<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "teste";

	$conexao = new  MySQLi("$host","$usuario","$senha","$banco");

	if ( $conexao -> connect_error ) {
		echo  "Erro de conexão";
	}
	else{
		echo  "Conexão bem Sucedida";
		}
?>