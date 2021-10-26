<?php 
include "conectkarl.php";
$_POST = json_decode(file_get_contents('php://input'),true);
$filas = array();

if(!is_null($_POST['id'])){
	$sqlPro=$db->prepare("DELETE FROM `productos` WHERE `productos`.`cod` = ?; ");
	
	if($sqlPro->execute([ $_POST['id'] ])){
		echo 'eliminado';
	}
}



?>