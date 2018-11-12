<?php
//Errors to sent to unauthorized users
//error 404 Page Not Found
function error404(){
 header("HTTP/1.1 404 not found");
 die();
}
//error 403 Forbidden
function error403(){
header("HTTP/1.1 403 Forbidden");
die();
}
//error 500 Internal Server Error
function error500(){
header("HTTP/1.1 500 Internal Server Error");
die();
}

//functions used to verify request
function ManualIPAuth($AuthorizedIP,$error){
 $reqIP = $SERVER['REMOTE_ADDR'];
 if($reqIP != $AuthorizedIP){
   $errheader = array{
                  404 => "error404();",
                  403 => "error403();",
                  500 => "error500();"}
  $errheader[$error];
 }
 
}
?>
