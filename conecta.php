<?php

	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "test"

	$conexao = new MySQLi("$host", "$usuario", "$senha", "$banco");

	$conexao->set_charset("utf8");

	if ($conexao -> connect_error) {
		echo "Erro de Conexão";
		else{
			echo "Conexão bem Sucedida";
		}
	}
?>