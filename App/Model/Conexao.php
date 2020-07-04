<?php

class Conexao{
	private static $instance;

	public static function getInstance(){
		if(isset(self::$instance)):
			return self::$instance;
		else:
			self::$instance = new PDO('mysql:host=localhost;dbname=crud_php;charset=utf8','root','drogaria');
		endif;
	}
}
