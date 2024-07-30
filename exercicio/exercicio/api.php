<?php
  //para o navegador saber que é json
  header('Content-Type:application/json');
  //conectar outro arquivo
  include 'conexao.php';
  //variavel para saber o tipo de requisição (verbo) da api
  $metodo = $_SERVER['REQUEST_METHOD'];
  //teste se funciona:
  echo json_encode($metodo);



?>