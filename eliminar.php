<?php
include('controlador.php');

$id = $_REQUEST['id'];

$ins = new crud();
$ins->eliminarDatos($id);

header('Location:index.php');

 ?>