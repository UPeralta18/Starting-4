<?php
	require('conexao.php');

	if(isset($_POST["nome"]))
	{
		$nome = $_POST['nome'];
		$tel = $_POST['telefone'];

		$bd->query("INSERT INTO vendedor(nome, telefone) VALUES('${nome}', '${tel}')");

		$id_inserido = $bd->insert_id;
	}

	header('Location:vendedores.php');
?>