<?php

//SETS
	require_once 'vendor/autoload.php';

	$produto = new \App\Model\Produto();
	$produto -> setNome('Notebook DELL');
	$produto -> setDescricao('i7 16GB RAM');
	$produto -> setValor(1500.00);
	//var_dump($produto);

	$produtoDao = new \App\Model\ProdutoDao();
	//Create/Insert
	$produtoDao-> create($produto);
	

	//Update 
	$produto -> setId(2);
	$produto -> setNome('Update');
	$produto -> setDescricao('i9 16GB RAM');
	$produto -> setValor(2000.00);
	$produtoDao-> update($produto);
	//Delete
	$produtoDao-> delete(3);
	//Leitura
	$produtoDao-> read();
	foreach ($produtoDao->read() as $produto ):
		echo $produto['NOME']."<br>".
		$produto['DESCRICAO']."<br>".
		$produto['VALOR']."<hr>";
	endforeach;
	

?>

