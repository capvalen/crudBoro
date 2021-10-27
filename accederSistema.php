<?php 
include "conectkarl.php";
$_POST = json_decode(file_get_contents('php://input'),true);

if(!is_null($_POST['usuario'])){
	if( $_POST['usuario']=='' && $_POST['clave']=='' ){
		echo 'ok';
	}
}