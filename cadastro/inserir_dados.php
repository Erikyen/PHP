<?php

	/*echo 'Cadastro'; */

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

if (!$nome || !$sobrenome || !$idade ) {
	echo 'Voçê não enviou todos os dados necessários. ';
	exit;
}

$dbcon = new MySQLI("localhost", "root", "", "bd_ifsp");

if ($dbcon -> connect_error){die('Erro('. $dbcon->connect_errno.')'. $dbcon->connect_error);
}else{
	$sql = "insert into pessoa values('".$nome."','".$sobrenome."','".$idade."')";

	if ($dbcon->query($sql)) {
		echo "Cadastro realizado com sucesso.";
	}

	$dbcon->close();

}