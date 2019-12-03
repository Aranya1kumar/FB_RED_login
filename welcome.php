<?php include("connection.php");
session_start();
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset='utf-8'>
    <link rel="icon" href="img\logo.png">
    <title>WELCOME</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
</head>
<body>
    <header>
    <h1 style="padding:25px;float:left; width:49%;">WELCOME <br><?php echo strtoupper($_SESSION['fname']);?></h1>
    <a href="logout.php"> <h1 style="padding:20px; float:right; width:49%;" name="logout">LOGOUT</h1></a>
    <?php session_unset();
    die; ?>
    </header>
</body>
</html>
