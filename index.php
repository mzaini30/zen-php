<?php

include 'vendor/autoload.php';

$link = $_SERVER["REQUEST_URI"];
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