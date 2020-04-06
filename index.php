<?php

include 'vendor/autoload.php';
echo "hello world";

$link = isset($_GET["link"]) ? $_GET["link"] : "index.html";
require_once("public/" . $link);