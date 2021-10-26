<?php 
include "conectkarl.php";
$_POST = json_decode(file_get_contents('php://input'),true);
$filas = array();

$sqlPro=$db->prepare("SELECT * FROM `productos`
where DESCRIPCION like ?
or CODIGO_SAP like ?
or CODIGO_ORACLE like ?; ");

$sqlPro->bindValue(1, "%{$_POST['texto']}%", PDO::PARAM_STR);
$sqlPro->bindValue(2, "%{$_POST['texto']}%", PDO::PARAM_STR);
$sqlPro->bindValue(3, "%{$_POST['texto']}%", PDO::PARAM_STR);

$sqlPro->execute();

//echo $sqlPro -> debugDumpParams();

while( $row = $sqlPro->fetch(PDO::FETCH_ASSOC) ){
	$filas[] = $row;
}
echo json_encode($filas);

?>