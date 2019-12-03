<?php
  include("connection.php");

  session_start();

  $email=$password ="";
  $emailErr= $passwordErr="";

  if(isset($_POST['login'])){

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["password"])) {
      $passwordErr= "password required";
    }else{
      $password= test_input($_POST["password"]);
      if (strlen($_POST["password"]) <= '8') {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    }
      $mobile= $_POST["email"];
      $pass=$_POST["password"];
      $query= "SELECT * FROM login WHERE email='$mobile' and password='$pass'";
      $val= mysqli_query($conn,$query);
      if (mysqli_num_rows($val) >0) {
            $row=mysqli_fetch_array($val);
            $_SESSION['fname']=$row['first_name'];
      header("location: logout.php");
    }else{$passwordErr= "wrong password";}
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>