<?php
require_once 'Conexion.php';

class PersistenciaDatos {
	private $_sql;
	private $_resultado;
	private $_query;
	
	public function __construct($sql,$query){
		$this->_sql = $sql;
		$this->_query = $query;
	}
	
	public function consulta($sql, $consulta, $con){
		$this->_query = mysqli_query($con,$sql);
		
		if(!$this->_query) {
			throw new Exception("Error al realizar la consulta $consulta");
		} 
		return $this->_query;
	}
	
	public function cuentaSQL($resultado){
		return mysqli_num_rows($resultado);
	}
	
	public function valores($resultado) {
		return mysqli_fetch_array($resultado);
	}
	
}

/*
require_once 'Errores.php';
$persistencia = new PersistenciaDatos;
$conexion = new Conexion;
$con = $conexion->conectar();

try {
	$var = $persistencia->consulta('select * from errores','consultar tablar errores',$con);

	while($row = $persistencia->valores($var)){
		$id = $row['id_error'];
		$dato = $row['datos_error'];
		echo $id.' - '.$dato.'<br>';
	}
	
} catch(Exception $ex){
	$error = new Error();
	$mensaje = $ex->getMessage();
	$codigo = $ex->getCode();
	$fichero = $ex->getFile();
	$linea = $ex->getLine();
	$clase = 'error-grave';
	$fecha = date('d/m/Y h:i:s A');
//	$log = $error->guardarLogError($codigo,$mensaje,$fichero,$linea,$fecha);
	echo $error->errores($codigo,$mensaje,$linea,$fichero,$clase);
}
*/