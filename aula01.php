<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 01 PHP</title>
	<style type="text/css">
		table, th, td {
    		border: 1px solid black;
    		width: 600px;
		}
		td {
			text-align: center;
		}

	</style>
</head>
<body>
	<h1 style='text-align: center;'>PHP - Atividade 01</h1>
	<p>Considerando que A seja igual a 10 e B seja igual a 20, eis os sequites cálculos:</p>
	<table>
		<thead>
			<th>Operação</th>
			<th>Resultado</th>
		</thead>
		<tbody>
		<tr>	
			<td>A+B</td>
			<td><?php echo 10 + 20 ?></td>
		</tr>
		<tr>	
			<td>A-B</td>
			<td><?php echo 10 - 20 ?></td>
		</tr>
		<tr>	
			<td>AXB</td>
			<td><?php echo 10 * 20 ?></td>
		</tr>
		<tr>	
			<td>A/B</td>
			<td><?php echo 10 / 20 ?></td>
		</tr>		
		<tr>	
			<td>B<sup>A</sup></td>
			<td><?php echo number_format(pow(20, 10), 0,'.', '.') ?></td>
		</tr>


		</tbody>
	</table>
</body>
</html>