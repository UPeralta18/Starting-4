<?php
	require('conexao.php');

	$vendedor = $_GET['id'];

	$resultados = $bd->query("SELECT * FROM venda WHERE id_vendedor = '$vendedor'");

	if(isset($resultados->num_rows))
	{
		echo '<h2>Vendas</h2><table border="1"> <tr><td>Valor</td><td>Data</td></tr>';
		while ($vendas = $resultados->fetch_object()) {
			echo '<tr><td>'.$vendas->valor.'</td><td>'.$vendas->data.'</td></tr>';
		}
		echo '</table>';
	}else
	{
		echo '<br />Não há vendas cadastradas para este vendedor<br />';
	}
?>	