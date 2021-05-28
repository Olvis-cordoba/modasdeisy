<?php
class conexion extends MySQLi {
	
	public function __costruct(){
		parent::__construct('localhost','root','','tienda');
		$this->query("SET NAMES 'utf8'");
		$this->connect_errno ? die("Error con la conexión") : $x = "Conectado";
		//echo($x);
		unset($x); //destruye la varable $x
	}
}

$con = new conexion;
$con->__costruct();

?>