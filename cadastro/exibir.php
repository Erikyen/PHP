<?php

	$dbcon = new Mysqli("localhost", "root", "", "bd_ifsp");
	if ($dbcon->connect_error) { 
		die('Erro('. $dbcon->connect_errno.')'. $dbcon-> connect_error);
	}else{
		$sql = "SELECT * FROM pessoa";
		$resultado = mysqli_query($dbcon, $sql);
		echo "<h2> Pessoas </h2>";
	while ($pessoa = mysqli_fetch_array($resultado)) {
		echo $pessoa['Nome']. " ". $pessoa['Sobrenome']. ",". $pessoa['idade']. "anos<br>";
	}

	mysqli_close($dbcon);
	}
?>