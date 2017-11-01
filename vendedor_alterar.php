<?php
	require('conexao.php');

	$id = $_GET["id"];

	$resultados = $bd->query("SELECT * FROM vendedor WHERE id_vendedor=${id}");

	if(isset($resultados ->num_rows))
	{
		echo '<table> <tr><td>Nome</td><td>Telefone</td></tr>';
		while ($vendedor = $resultados->fetch_object()) {
			echo '<tr> <td>'.$vendedor->nome.'</td><td>'.$vendedor->telefone.'</td>';
		}
		echo '</table>';
	}else
	{
		echo '<br />Não há vendedores cadastrados<br />';
	}
?>
	<form method="post">
		<input type="text" name="nome" />
		<input type="text" name="telefone" />
		<button>ok</button>
	</form>

<?php
	if(isset($_POST["nome"]))
	{
		$nome = $_POST["nome"];
		$tel = $_POST["telefone"];

		if($nome=='')
			$bd->query("UPDATE vendedor SET telefone='${tel}' WHERE id_vendedor='${id}'");
		elseif($tel=='')
			$bd->query("UPDATE vendedor SET nome='${nome}' WHERE id_vendedor='${id}'");
		else
			$bd->query("UPDATE vendedor SET nome='${nome}', telefone='${tel}' WHERE id_vendedor='${id}'");

		header('Location:vendedores.php');
	}
?>