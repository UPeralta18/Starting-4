<!DOCTYPE html>
<html>
	<body>
	<h1>Adicionar navo venda:</h1>
		<form method="POST">
			Valor da Venda<input type="text" name="valor" /> <br />
			<button>ok</button>
		</form>
	</body>
</html>

<?php
	require('conexao.php');

	$vendedor = $_GET['id'];

	if (isset($_POST['valor'])) {
		$valor = $_POST['valor'];
		$data = date("Y-m-d");

		$bd->query("INSERT INTO venda(id_vendedor, valor, data) VALUES('${vendedor}', '${valor}', '${data}')");

		header('Location:vendedores.php');
	}

	
?>