<?php
$server="localhost";

/* Net	*/
$username="root";
$password="";
$daseDatos= "test";

$cadena= mysqli_connect($server,$username,$password)or die("No se ha podido establecer la conexion");
$sdb= mysqli_select_db($cadena,$daseDatos)or die("La base de datos no existe");
$cadena->set_charset("utf8");
mysqli_set_charset($cadena,"utf8");

$esclavo= new mysqli($server, $username, $password, $daseDatos);
$esclavo->set_charset("utf8");


$conf= new mysqli($server, $username, $password, $daseDatos);
$conf->set_charset("utf8");

try {
	$db = new PDO (
		'mysql:host=localhost;
		dbname='.$daseDatos,
		$username,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}

?>