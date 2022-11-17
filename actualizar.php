<?php
include('controlador.php');

$id = $_POST['id'];
$datos = array($_POST['ISBN'], $_POST['nombre'], $_POST['autor'], $_POST['editorial']);

$ins = new crud();
$ins->actualizarDatos($id, $datos);

header('Location:index.php');

 ?>