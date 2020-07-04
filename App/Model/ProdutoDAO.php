<?php

namespace App\Model;

class ProdutoDao {


	public function create(Produto $prod){
		$sql = 'INSERT INTO produtos (nome, descricao, valor) VALUES (?,?,?) ';

		$stmt = Conexao::getInstance()->prepare($sql);
		$stmt->bindValue(1,$prod->getNome());
		$stmt->bindValue(2,$prod->getDescricao());
		$stmt->bindValue(3,$prod->getValor());

		$stmt->execute();

	}

	public function read(){

	}

	public function update(Produto $prod){

	}

	public function delete($id){

	}

}