<?php 
include('controlador.php');

if(isset($_POST['buscar'])){
	$id = $_POST['buscar'];
	//$id = 'Quijote';
	$buscar = $_POST['campo'];
	//$buscar = 'nombre';
}
else{
	$id = '';
	$buscar = 'nombre';
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/POO/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="http://localhost/POO/css/estilos.css" rel="stylesheet" type="text/css">
		<script src="https://kit.fontawesome.com/eeebae7800.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar fixed-top navbar-dark bg-primary">
	<ul class="nav">
		<li class="nav-item">
			<!--boton de altas de libros-->
			<form action="frm_altas.php">
				<button class="btn btn-outline-light" type=submit value='Altas de Libros'>Altas</button>
			</form>
		</li>
	</ul>		
	
	<form class="form-inline" action="index.php" method="POST">
		<input class="form-control mr-sm-2" type="text" name="buscar" value="" placeholder="Buscar">
		<select class="form-control mr-sm-2" name="campo">
			<option value="nombre">nombre</option>
			<option value="autor">autor</option>
			<option value="editorial">editorial</option>
		</select>
		<input rol="button" class="form-control mr-sm-2" type="submit" value="Enviar">
		<!--<button class="btn btn-outline-light " type="submit" value='Buscar'>Buscar</button>-->
	</form>
</nav>
<div class = "container">
<br>
<br>
<br>
<table class = "table table-bordered table-hover">
	<tr>
		<th>Id</td>
		<th>ISBN</td>
		<th>Titulo</td>
		<th>Autor</td>
		<th>Editorial</td>
		<th><i class="fa-solid fa-pen"></i></td>
		<th><i class="fa-solid fa-xmark"></td>
	</tr>
	<?php 
		$obj = new crud();
		$datos = $obj->mostrarDatos($id, $buscar);

		foreach ($datos as $key) {
	 ?>
	<tr>
		<td><?php echo $key['id']; ?></td>
		<td><?php echo $key['ISBN']; ?></td>
		<td><?php echo $key['nombre']; ?></td>
		<td><?php echo $key['autor']; ?></td>
		<td><?php echo $key['editorial']; ?></td>
		<td><a href="frm_editar.php?id=<?php echo $key['id']; ?>"><i class="fa-solid fa-pen"></i></a></td>
		<td><a href="eliminar.php?id=<?php echo $key['id']; ?>"><i class="fa-solid fa-xmark"></i></a></td>
	</tr>
	<?php 
		}
	 ?>
</table>
</div>
</body>
</html>