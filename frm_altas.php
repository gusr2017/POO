<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="http://localhost/POO/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="http://localhost/POO/css/estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar fixed-top navbar-dark bg-primary">
	<ul class="nav">
		<li class="nav-item">
			<!--boton de altas de libros-->
			<form action="index.php">
				<button class="btn btn-outline-light" type=submit value='Listado'>Listado</button>
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
<div class="col-md-12">
	<form method="POST" action="insertar.php">
		<table class = "table table-bordered">
			<tr>
				<td><label>ISBN</label></td>
				<td><input type="text" name="ISBN"></td>
			</tr>
			<tr>
				<td><label>Titulo</label></td>
				<td><input type="text" name="titulo"></td>
			</tr>
			<tr>
				<td><label>Autor</label></td>
				<td><input type="text" name="autor"></td>
			</tr>
			<tr>
				<td><label>Editorial</label></td>
				<td><input type="text" name="editorial"></td>
			</tr>
			<tr>
				<td><input type="submit" name="Guardar"></td>
			</tr>
		</table>
	</form>
</div>
</div>
</body>
</html>