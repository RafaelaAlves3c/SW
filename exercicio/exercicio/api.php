<?php
  //para o navegador saber que é json (no navegador só pega GET)
  header('Content-Type:application/json');
  //conectar outro arquivo
  include 'conexao.php';
  //variavel para saber o tipo de requisição (verbo) da api
  $metodo = $_SERVER['REQUEST_METHOD'];
  $url = $_SERVER['REQUEST_URI'];


  $path = parse_url($url, PHP_URL_PATH);
  $path = trim($path, '/');
  $pathparts = explode('/', $path);
  
  

  $primeira = isset($pathparts[0]) ? $pathparts[0] : '';
  $segunda = isset($pathparts[1]) ? $pathparts[1] : '';
  $terceira = isset($pathparts[2]) ? $pathparts[2] : '';
  $quarta = isset($pathparts[3]) ? $pathparts[3] : '';

  $response = [
    'metodo' => $metodo,
    'primeiraParte' => $primeira,
    'segundaParte' => $segunda,
    'terceiraParte' => $terceira,
    'quartaParte' => $quarta
  ];
  //echo json_encode($response)

  switch($metodo){
    case 'GET': 
      break;
    case 'POST':
      break;
    case 'PUT':
      break;
    case 'DELETE':
      break;  
    default:
      echo json_encode(
         [
          'mensagem' => 'Método não permitido'
         ]
      );     
  }

?>