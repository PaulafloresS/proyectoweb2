<?php

define('HOST', 'localhost'); 
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'blog');

function conectar() {
  $conexion = new mysqli(HOST, USER, PASS, DBNAME);
  
  if (!$conexion) {
    die('Error al conectar con el Servidor de BD');
  } else {
    return $conexion;
  }
}
