<?php 
class crud{
	private $servidor = "localhost";
	private $usuario = "root";
	private $bd = "biblioteca";
	private $password = "";

	public function conectar(){
		$conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
		return $conexion;
	}

	public function mostrarDatos(string $id, string $buscar){
		$con = $this->conectar();

		if ($id=='') {
			$sql = "SELECT * FROM libros";
			$rs = mysqli_query($con, $sql);
			return $fila = mysqli_fetch_all($rs, MYSQLI_ASSOC);
		}
		else {
			echo $buscar;
			
			//$sql = 'SELECT nombre, * FROM libros WHERE '.$buscar.' = '. string($id);
			$sql = 'SELECT * FROM libros WHERE '.$buscar.' = "El Quijote"';
			echo $id.'sss';
			$rs = mysqli_query($con, $sql);
			return $fila = mysqli_fetch_all($rs, MYSQLI_ASSOC);
		}
	}

	public function insertarDatos($datos){
		$con = $this->conectar();
		$sql = "INSERT INTO libros(ISBN, nombre, autor, editorial) VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]')";
		$rs = mysqli_query($con, $sql);
	}

	public function actualizarDatos($id, $datos){
		$con = $this->conectar();
		$sql = "UPDATE libros SET ISBN = '$datos[0]', nombre = '$datos[1]', autor = '$datos[2]', editorial = '$datos[3]' WHERE id=$id";
		$rs = mysqli_query($con, $sql);
	}

	public function eliminarDatos($id){
		$con = $this->conectar();
		$sql = "DELETE FROM libros WHERE id=$id";
		$rs = mysqli_query($con, $sql);
	}
}

 ?>