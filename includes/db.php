<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "cms";

foreach ($db as $key => $value) {
  define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
  echo "Deu Ruim";
} 

function insereCategoria($connection, $cat_nome) {
  $query = "INSERT INTO categoria(cat_nome) VALUES ('{$cat_nome}')";
  return mysqli_query($connection, $query);
}

function listarCategorias($connection) {
  $categorias = array();
  $query = "SELECT * FROM categoria";
  $retorno = mysqli_query($connection, $query);
  while ($categoria = mysqli_fetch_assoc($retorno)) {
      array_push($categorias, $categoria);
  }
  return $categorias;
}

function removerCategorias($connection, $cat_id) {
  $query = "DELETE FROM categoria WHERE cat_id = {$cat_id}";
  return mysqli_query($connection, $query);
}