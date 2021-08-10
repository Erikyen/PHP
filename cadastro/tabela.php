<?php

//Criando conexão com a base de dados bd_ifsp

	$dbcon = mysqli_connect("localhost", "root", "", "bd_ifsp");
	$sql = "CREATE TABLE pessoa (Nome CHAR(30), Sobrenome CHAR(30), Idade INT)";
	if (mysqli_query($dbcon, $sql)) {
		echo "Tabela criada com sucesso!!";
	}else{
		echo "Erro: ". mysqli_error($dbcon);
	}
	mysqli_close($dbcon);
?>