<?php

class Produto{
	private $nome, $descricao, $valor;

	prublic function getNome(){
		return $this->nome;
	}

	prublic function setNome($nome){
		$this->nome = $nome;
	}

	prublic function getDescricao(){
		return $this->descricao;
	}

	prublic function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	prublic function getValor(){
		return $this->valor;
	}

	prublic function setValor($valor){
		$this->valor = $valor;
	}

}