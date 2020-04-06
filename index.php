<?php

include 'vendor/autoload.php';

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
  header("Content-Type: application/json");
  $method = $_SERVER["REQUEST_METHOD"];
  $data = ($method == "GET") ? $_GET : $_POST;
  $olah_link = explode("?", $link);
  $link = $olah_link[0];
  // print_r($link);
  // print_r($data);
  $jsonServer = new JsonServer\JsonServer;
  $jsonServer->handleRequest($method, $link, $data)->send();
}