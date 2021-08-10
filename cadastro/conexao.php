<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_ifsp";

$dbcon = new Mysqli("$host", "$usuario", "$senha", "$banco");

//teste para ver se esta funcionando
	if ($dbcon->connect_error) {
		echo "conexap_erro";
	}else{
		echo "conexao_ok";
	}
?>