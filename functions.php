<?php 

function IsURL ($url) {
   return str_contains($_SERVER['REQUEST_URI'], $url);
}