<header>
	<style type="text/css">
		
		table{
			border: 1px solid black;
			width: 80%;

		}
		table th, td{
			border: 1px solid black;
			padding: 5px;
		}

		}

	</style>
</header>

<?php

	include "banco.php";
	
	@$id_mercadoria = $_POST['idmercadoria'];

	if ($id_mercadoria === "") {
		
		echo "Campos vazios";
	
	} else {
		

		$sql = "SELECT * FROM mercadorias WHERE id_mercadoria = '".$id_mercadoria."' ;";
		$exe = mysqli_query($conexao,$sql);

		
		if($exe) {
			
			$linha = mysqli_num_rows($exe);

	

			if ($linha === 1) {

				echo "<table>
							<tr>
								<th>ID</th>
								<th>Indentificador</th>
								<th>Nome</th>
								<th>Estoque</th>
							</tr>";

						while ($array = mysqli_fetch_array($exe)){
								echo "<tr>
										<td>$array[id] </td>
										<td>$array[id_mercadoria] </td>
										<td>$array[nome] </td>
										<td>$array[quantidade] </td>
									  </tr>";
							}

				echo "</table>";

			}			
			

			else {

				echo "Deficom 4";
			
			}
		
		} else{

		   echo "ERRO_REQUISICAO";
		
		}
	}


	
?>


