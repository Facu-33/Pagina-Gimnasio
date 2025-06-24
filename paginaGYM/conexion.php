<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gym_crud');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// verifica conexion
if($link === false){
    die("ERROR: No se pudo conectar " . mysqli_connect_error());
}else{
  //echo " Conexión exitosa ";
}
?>