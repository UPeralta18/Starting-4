<?php
	$bd = new mysqli('localhost', 'root', '', 'vendedor');

	if($bd->connect_errno)
	{
		throw new Exception('Erro na conexão', $conexão->connect_errno);
	}

	$bd->set_charset("utf-8");
?>