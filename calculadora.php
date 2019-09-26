<?php 
ini_set('display_errors', 0 );
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculadora PHP.</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
	<style type="text/css">
		body { 
			font-family: sans-serif;
			background-color: rgb(200, 200, 200, 0.3);
		}
		.mae{
			background-color: rgb(200, 200, 200, 0.5);
			text-align: center;
			padding: 5rem;
			box-shadow: inset 0 -3px 1em #7A7A7A;
			border: 1px solid #7A7A7A;
		}
		input[type=number], select{
			font-size: 18pt;
		}
		input[type=number]{
			width: 10rem;
			text-align: center;
			margin-left: 1rem;
			background-color: black;
			color: green;
			font-weight: bold;
		}
		input[type=submit]{
			font-size: 18pt;
					
		}
		select:focus {
			background-color: rgb(200,200,200,0.2);
		}
		.palavra{
			display: inline-block;
			margin-top: 0; 
			color: #7f7f7f;
			text-shadow: 1px 2px black;
		}
		.resultado{
			margin-top: 1rem;
			font-size: 18pt;
		}

	</style>
</head>
<body>
	<form method="GET">
		<div class="mae">
			<h1 class="palavra">Digite o primeiro valor: </h1>
			<input type="number" name="nmr1" value="1" /><br>
			<h1 class="palavra">Digite o segundo valor: </h1>
			<input type="number" name="nmr2" value="1" />
			<h1>Selecione a operação desejada: </h1>
				<select	name="operacao" value="soma">
					<option	value="soma">Soma.</option>
					<option	value="subtração">Subtração.</option>
					<option	value="multiplicação">Multiplicação.</option>
					<option	value="divisão">Divisão.</option>
				</select>
			<input type="submit" name="Somar" value="Calcular" />
		
	</form>
			<div class="resultado">
				<hr>
				<?php
				$a = $_GET["nmr1"];
				$b = $_GET["nmr2"];
				$op = $_GET["operacao"];
				$c = [];

			    	    if($op == "soma"){
			        	    $c = $a + $b;
			        	    echo "O resultado da $op de $a mais $b é: $c";
			    	    }
			        	elseif($op == "subtração"){
			            	$c = $a - $b;
			            	echo "O resultado da $op de $a menos $b é: $c";
			        	}
			        	elseif($op == "multiplicação"){
			           		$c = $a*$b;
			           		echo "O resultado da $op de $a vezes $b é: $c";
			        	}
			        	elseif($op == "divisão"){
			            	$c = $a/$b;
			            	echo "O resultado da $op de $a por $b é: $c";
			        	}
			        	else{
			        		echo $a;
			        	}

				?>
			</div>
	</div>
</body>
</html>

