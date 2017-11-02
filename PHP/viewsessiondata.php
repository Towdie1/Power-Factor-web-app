<?php 
session_start();
function runMyFunction() {
   print_r($_SESSION);

   if(!isset($_COOKIE['userid'])) {
    echo "No Cookie set";
} else {
    echo "Cookie set";
   
}
}

if (isset($_GET['show'])) {
  runMyFunction();
}
header("Refresh:5; url=index.html");   

?>