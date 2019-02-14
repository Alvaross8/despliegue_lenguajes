<?php
class Connection {
	public static function connect(){
		try {
			$db = new mysqli("localhost", "root", "", "despliegue");
			//echo "Conectado!!!";
		} catch (Exception $e){
			echo "ERROR AL CONETAR CON LA BASE DE DATOS!<br>";
			echo $e->getMessage();
			echo "<br>";
			echo $e->getLine();
			die("<br> No se ha podido conectar!");
		}
		return $db;
	}
}