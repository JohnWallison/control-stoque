<header>
	<style type="text/css">
		body{
			background: linear-gradient(90deg, rgba(0,0,128,1) 20%, rgba(0,0,255,1) 50%, rgba(0,0,128,1) 80%);
		}

		#st-border-table{
			background: linear-gradient(90deg, rgba(0,200,0,1) 20%, rgba(0,255,0,1) 50%, rgba(0,200,0,1) 80%);
			margin: auto 400px auto 400px;
			border: 8px solid;
			padding: 10px;
		}

		#st-nav{
			margin: 50px 600px 50px 600px;
		}

		#st-title-stoque{
			text-align: center;
		}
		table{
			width: 100%;
		}

		table  th, td{
			border: 2px solid black;
		}

		a{
			background: linear-gradient(90deg, rgba(0,200,0,1) 20%, rgba(0,255,0,1) 50%, rgba(0,200,0,1) 80%);	
			color: blue;
			text-decoration: none;
			border: 4px solid black;
			padding: 5px;

		}

		@media(max-width: 800px){
			#st-nav{
			margin: 50px 100px 50px 100px;
		}

		}

	</style>
</header>



<div id="st-nav">
	<a href="form-pesquisa.php">Pesquisar</a>

	<a href="form-vender.php">Vender</a>
	</center>
</div>



<div id="st-border-table">

<?php

include "banco.php";

	$sql = "SELECT * FROM mercadorias ;";
	$exe = mysqli_query($conexao,$sql);
		
	echo "		<h3 id='st-title-stoque'>Estoque</h3>

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