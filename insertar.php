<?php
include('controlador.php');

$datos = array($_POST['ISBN'], $_POST['titulo'], $_POST['autor'], $_POST['editorial']);

$ins = new crud();
$ins->conectar();
$ins->insertarDatos($datos);

//if($ins->insertarDatos($datos)){
	header('Location:index.php');
/*}
else{
	echo "error al guardar";
}*/

 ?>