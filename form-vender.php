<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>


	<style type="text/css">
		
		body{
			background: linear-gradient(90deg, rgba(0,0,0,1) 20%, rgba(0,0,128,1) 50%, rgba(0,0,0,1) 80%);
		}

		a{
			text-decoration: none;
			position: absolute;
			top: 280px;
			left: 600px;
		}

		table{
			width: 50%;

		}
		table th, td{
			border: 1px solid black;
			padding: 2px;
		}

		#div-principal {
			background-color: #DCDCDC;
			box-shadow: 2px 2px 4px black;
			border-radius: 3px;
			padding: 10px;
			padding-bottom: 50px;
			
		}

		input {
			border-radius: 8px;
			border: none;
			height: 20px;
		}		

		/*responsividade da div principal*/

		@media(max-width: 10000px){
			#div-principal {
				margin: 50px 400px 50px 400px;
			}

		}

		@media(max-width: 1000px){
			#div-principal {
				margin: 50px 200px 50px 200px;
			}

		}

		@media(max-width: 800px){
			#div-principal {
				margin: 50px 100px 50px 100px;
			}

		}

		@media(max-width: 500px){
			#div-principal {
				margin: 50px 50px 50px 50px;
			}

		}
		/* FINAL - responsividade da div principal*/

		

	</style>

</head>
<body>

	<center>
	
		<div id="div-principal">

			<h3>Vender</h3>
				
			<form action="vender.php" method="POST">
			Indentificador:<br>
			<input type = "number" name = "indentificador" autocomplete="off" required>
			<br><br>
			Quantidade:<br>
			<input type = "number" name = "quantidade" autocomplete="off" required>
			<br><br>
			<input type = "submit" value=" inserir ">
			<br>
			</form>
			<a href="form-pesquisa.php">Pesquisar</a>
		</div>


<div id="div-principal">

<?php

include "banco.php";

	$sql = "SELECT * FROM mercadorias ;";
	$exe = mysqli_query($conexao,$sql);
		
	echo "		<h3>Estoque</h3>

				<table>
						<tr>
							<th>Indentificador</th>
							<th>Nome</th>
							<th>Estoque</th>
						</tr>";

					while ($array = mysqli_fetch_array($exe)){
							echo "<tr>
									<td>$array[id_mercadoria] </td>
									<td>$array[nome] </td>
									<td>$array[quantidade] </td>
								  </tr>";
						}

			echo "</table>";
?>	

</div>			
	
	</center>

</body>
</html>
	
	
		
