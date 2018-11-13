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
//check if the request IP is equel to the one set manually
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
//check if the request IP is authorized in the database
function AutoIPAuth($error){
 include_once 'db.php';
   $reqIP = $SERVER['REMOTE_ADDR'];
   $SQL = "SELECT authorized FROM IP_table WHERE IP='".$reqIP."';";
   $authIP = mysqli_query($conn, $SQL);
 if(mysql_fetch_row($authIP)) {
   $errheader = array{
                  404 => "error404();",
                  403 => "error403();",
                  500 => "error500();"}
  $errheader[$error];
 }
}
function UAAuth($authUA,$error){
 $reqUA = $_SERVER['HTTP_USER_AGENT'];
 if($reqUA != $authUA){
           404 => "error404();",
           403 => "error403();",
           500 => "error500();"}
  $errheader[$error];
 }
}
function BrowserAuth($browser,$error){
$req = get_browser();
 if($req['browser'] != $browser){
           404 => "error404();",
           403 => "error403();",
           500 => "error500();"}
  $errheader[$error];
 }
}
?>
