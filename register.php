<?php
include("connection.php");
$fnameerr=$mobileerr=$newpassworderr=$birtherr=$genderErr = $surnameerr="";
$fname=$mobile= $newpassword=$birth=$gender=$surname="";
if(isset($_POST["submit"])){
     
    $validate=0;

    if(empty($_POST["firstname"])){
      $fnameerr= "Name is required";
      $validate=1;
    }else{
      $fname= tests_input($_POST["firstname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
        $fnameerr = "Only letters and white space allowed";
        $validate=1;
      }     
    }
    if(empty($_POST["surname"])){
      $surnameerr="surname is requiared";
      $validate=1;
    }else{
      $surname= tests_input($_POST["surname"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
        $surnameerr = "Only letters and white space allowed";
        $validate=1;
      }  
    }

    if(empty($_POST["mobile"])){
    $mobileerr = "Email is required";
    $validate=1;
    } else {
      $mobile = tests_input($_POST["mobile"]);
    }
    
    if (empty($_POST["newpassword"])){
      $newpassworderr = "password required";
      $validate=1;
    }else{
      $newpassword= tests_input($_POST["newpassword"]);
      if (strlen($_POST["newpassword"]) <='8') {
      $newpassworderr= "Your Password Must Contain At Least 8 Characters!";
      $validate=1;
    }
    elseif(!preg_match("#[0-9]+#", $newpassword)) {
      $newpassworderr= "Your Password Must Contain At Least 1 Number!";
      $validate=1;
    }
    }

    if (empty($_POST["gender"])) {
        $gendererr= "Gender is required";
        $validate=1;
    } else{
      $gendererr="";
      $gender= tests_input($_POST["gender"]);
    }

    if(empty($_POST["birth"])){
        $birtherr="DOB required";
        $validate=1;
    }else{
      $birth=tests_input($_POST["birth"]);
    }

    if(!$validate)
    {
      $fn=$_POST["firstname"];
      $sn=$_POST["surname"];
      $mob=$_POST["mobile"];
      $newpass=$_POST["newpassword"];
      $bir=$_POST["birth"];
      $gen=$_POST["gender"];

      $query= "INSERT INTO login(first_name, surname, email, password, DOB, gender) VALUES ('$fn','$sn','$mob','$newpass','$bir','$gen')";
      $querr="SELECT * FROM login WHERE email='$mob' and password='$newpass'";
      $value= mysqli_query($conn,$query);
      $val=mysqli_query($conn,$querr);
      if (mysqli_num_rows($val) >0) {
        $row=mysqli_fetch_array($val);
        $_SESSION['fname']=$row['first_name'];
      header("location: welcome.php");}
    }
}
function tests_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data; 
}
?>