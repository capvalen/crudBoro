<?php 
include "conectkarl.php";
$_POST = json_decode(file_get_contents('php://input'),true);

if(!is_null($_POST['sap'])){
	$sql=$db->prepare("INSERT INTO `productos`(`DESCRIPCION`, `CODIGO_SAP`, `CODIGO_ORACLE`) VALUES (?, ?, ?);");
	if($sql->execute([ $_POST['descripcion'], $_POST['sap'], $_POST['oracle'] ])){
		echo 'bien';
	}

}

//echo $sql->debugDumpParams();


?>