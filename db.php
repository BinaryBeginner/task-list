<?php
session_start();

/* conexion a la base de datos */

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'php_mysql_crud';

/* uso de la funcion mysqli_connect() para realizar la conexion */
$conn = mysqli_connect($hostname, $user, $password, $database);


/* verificacion de la conexion a la base de datos */
if (isset($conn)) {
/*     echo("Se conecto con exito");
 */}

?>