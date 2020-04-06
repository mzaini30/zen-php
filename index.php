<?php

include 'vendor/autoload.php';

use JsonServer\JsonServer;

$link = $_SERVER["REQUEST_URI"];

// jika tidak dimulai dari /api

if (substr($link, 0, 5) !== "/api/"){

  if ($link == "/"){
    $link = "/index";
  }
  $target = "public" . $link;
  
  $link1 = $target . ".html";
  $link2 = $target . ".php";
  
  if(file_exists($link1)){
    require_once($link1);
  } else if (file_exists($link2)){
    require_once($link2);
  } else {
    require_once("script/404.html");
  }

} else {
  
  $method = $_SERVER["REQUEST_METHOD"];
  // $data = ($method == "GET") ? $_GET : $_POST;
  $data = isset($_GET) ? $_GET : $_POST;
  $olah_link = explode("?", $link);
  $link = $olah_link[0];
  // var_dump($link);
  // var_dump($data);
  $jsonServer = new JsonServer;
  $jsonServer->handleRequest($method, $link, $data)->send();
  
}