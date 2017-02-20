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

	<?php 
		$a = $_REQUEST['a']; 
		$b = $_REQUEST['b'];

		$soma = $a+$b;
		$subtrai = $a-$b;
		$multpl = $a*$b;
		$divd = $a/$b;
		$expon = pow($b, $a);
	?>

	<h1 style='text-align: center;'>PHP - Atividade 01</h1>
	<p>Informe os valores que deseja usar:</p>
	
	<form action="aula01-desafio.php">
		<input type="number" name="a">
		<input type="number" name="b">	
		<input type="submit" name="botao">
	</form>
	

	<table class="table">
		<thead>
			<th>Operação</th>
			<th>Resultado</th>
		</thead>
		<tbody>
		<tr>	
			<td>A+B</td>
			<td><?php echo $soma ?></td>
		</tr>
		<tr>	
			<td>A-B</td>
			<td><?php echo $subtrai ?></td>
		</tr>
		<tr>	
			<td>AXB</td>
			<td><?php echo $multpl ?></td>
		</tr>
		<tr>	
			<td>A/B</td>
			<td><?php echo $divd ?></td>
		</tr>		
		<tr>	
			<td>B<sup>A</sup></td>
			<td><?php echo number_format($expon, 0,'.', '.') ?></td>
		</tr>


		</tbody>
	</table>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>