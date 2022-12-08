<?php 

function dd($value){

   echo "<pre>";
   var_dump($value);
   echo "</pre>";
}

function IsURL ($url) {
   return parse_url($_SERVER['REQUEST_URI'])['path'] === $url;
}