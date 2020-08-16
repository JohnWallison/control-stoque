<?php

	include "banco.php";
	
	@$indentificador = $_POST[indentificador];
	@$nome = $_POST[nome];
	@$estoque = $_POST[estoque];

	$sql = "insert into mercadorias (id_mercadoria, nome, quantidade) 
	values ('$indentificador','$nome','$estoque')";
	
	@mysqli_query($conexao,$sql);
	

?>

<script>		
	alert("Cadastrado com sucesso!");
	location.href="form_inserir_objeto.php";	
</script>