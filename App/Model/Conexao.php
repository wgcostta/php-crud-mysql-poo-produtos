<?php

namespace App\Model;

class Conexao {
	private static $instance;

	public static function getInstance(){
		//Caso não existir ele cria a instancia
		if(!isset(self::$instance)):
			self::$instance = new \PDO('mysql:host=localhost;dbname=crud_php;charset=utf8','root','drogaria');
		endif;

		return self::$instance;
	}
}
?>