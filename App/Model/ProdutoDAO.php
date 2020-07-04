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
		$sql = 'SELECT * FROM produtos';
		$stmt = Conexao::getInstance()->prepare($sql);
		$stmt->execute();

		if($stmt->rowCount() > 0):
			$resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			return $resultado;
		else:
			return [];
		endif;

	}

	public function update(Produto $prod){
		$sql = 'UPDATE produtos SET nome=?, descricao=?, valor=? WHERE ID = ? ';

		$stmt = Conexao::getInstance()->prepare($sql);
		$stmt->bindValue(1,$prod->getNome());
		$stmt->bindValue(2,$prod->getDescricao());
		$stmt->bindValue(3,$prod->getValor());
		$stmt->bindValue(4,$prod->getId());

		$stmt->execute();

	}

	public function delete($id){
		$sql = 'DELETE FROM produtos WHERE ID = ? ';

		$stmt = Conexao::getInstance()->prepare($sql);
		$stmt->bindValue(1,$id);

		$stmt->execute();
	}

}