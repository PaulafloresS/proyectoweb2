<?php

function readTable() {
  $con = conectar();
  $data = array();

  // seleccionar (*) todas las columnas de la tabla posts ordenadas por id
  $sql = "SELECT * FROM posts ORDER BY id ";
  $res = $con->query($sql);

  if ($con->errno) {
    echo '<p>Consulta: ' . $sql . '</p>';
    die($con->error);
  }

  //recorro la tabla y la guardo en un array asociativo con nombre '$row'
  while ($row = $res->fetch_assoc()) {
    $data[] = $row;
  }

  return $data;
}

function readRegistro($id) {
  $con = conectar();
  
  // seleccionar (*) todas las columnas de la tabla posts donde el id = $id
  $sql = "SELECT * FROM posts WHERE id=" . $id;
  $res = $con->query($sql);

  if ($con->errno) {
    echo '<p>Consulta: ' . $sql . '</p>';
    die($con->error);
  }

  //guardo el array asociativo devuelto con el nombre '$row'
  $row = $res->fetch_assoc();

  return $row;
}