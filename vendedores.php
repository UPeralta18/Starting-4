<?php
	require('conexao.php');

	$resultados = $bd->query("SELECT * FROM vendedor");

	if(isset($resultados->num_rows))
	{
		echo '<table border="1"> <tr><td>ID</td><td>Nome</td><td>Telefone</td><td></td><td></td><td></td></tr>';
		while ($vendedor = $resultados->fetch_object()) {
			echo '<tr> <td>'.$vendedor->id_vendedor.'</td><td>'.$vendedor->nome.'</td><td>'.$vendedor->telefone.'</td>
			<td><a href="vendas.php?id='.$vendedor->id_vendedor.'"> Adicionar Venda </a></td>
			<td><a href="relatorio_vendedor.php?id='.$vendedor->id_vendedor.'"> Detalhes </a></td>
			<td><a href="vendedor_alterar.php?id='.$vendedor->id_vendedor.'"> Alterar </a></td></tr>';
		}
		echo '</table>';
	}else
	{
		echo '<br />Não há vendedores cadastrados<br />';
	}
?>	

<!DOCTYPE html>
<html>
	<body>
	<h1>Adicionar novo vendedor:</h1>
		<form method="POST" action="novo_vendedor.php">
			<input type="text" name="nome" /> <br />
			<input type="text" name="telefone" /> <br />
			<button>ok</button>
		</form>
	</body>
</html>	