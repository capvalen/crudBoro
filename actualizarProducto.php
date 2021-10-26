<?php 
include "conectkarl.php";
$_POST = json_decode(file_get_contents('php://input'),true);

if(!is_null($_POST['sap'])){
	$sql=$db->prepare("UPDATE `productos` set `DESCRIPCION` = ?, `CODIGO_SAP` =?, `CODIGO_ORACLE` =? WHERE cod=?;");
	if($sql->execute([ $_POST['descripcion'], $_POST['sap'], $_POST['oracle'], $_POST['id'] ])){
		echo 'bien';
	}

}

//echo $sql->debugDumpParams();


?>