<?php

//SETS
	require_once 'vendor/autoload.php';

	$produto = new \App\Model\Produto();
	$produto -> setNome('Notebook DELL');
	$produto -> setDescricao('i7 16GB RAM');
	$produto -> setValor(1500.00);
	//var_dump($produto);

	$produtoDao = new \App\Model\ProdutoDao();
	$produtoDao-> create($produto);
?>

