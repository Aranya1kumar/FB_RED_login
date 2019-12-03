<?php   
session_start(); //to ensure you are using same session
 //destroy the session
header("location:FB_RED.php"); //to redirect back to "index.php" after logging out

if (empty($_SESSION["fname"])) {
     header("location:FB_RED.php");
     session_destroy('fname');
}else {
     header("location:welcome.php");
     session_destroy('fname');
}
exit();
?>