
<?php include "login.php"?>
<?php include "register.php";
if(!isset($gendererr))
{
    $gendererr='';
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset='utf-8'>
    <link rel="icon" href="img\logo.png">
    <title>Facebook Red</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='login.css'>
</head>
<body>
    <div>
    <header >
        <h1 class="name" title="Facebook Red">Facebook Red</h1>
        <form class="input" method="POST" action=" ">
            <table style="width: 100%; position:relative; ">
            <tr>
               <td> Email or Phone:
                <input type="text" name="email" title= "Enter your E-mail or Phone">
                <span class="error"><?php echo $emailErr;?></span></td>
                <td><br>Password:
                <input type="password" name="password" title="Enter Your Password">
                <span class="error"><?php echo $passwordErr;?></span><br>
                 <a href=""> Forgotten Password?</a></td>
                <td><input type="submit" name="login" class="in" value="LOG IN"></td>
            </tr>
            </table>    
        </form>
    </header>
    <section>
    <div class="world">
        <img style="padding:25%;" src="img\Worldwide.png" alt="worldwide" width="460" height="345">
    </div>
    <div class="reg">
        <div class="reg_val">
            <artical>
                <b style="font-size: 40px;">Creat New account</b>
                <p style="font-size: 20px;">it's quick and easy.</p>                        
            </artical>
        </div>
        <div>
            <form class="register" method="POST" action="">
            <table style="width: 100%">
                <tr>
                 <td><input type="text" class="insert" name="firstname" placeholder="First Name..">&nbsp; &nbsp;
                 <br><span class="error"><?php echo $fnameerr;?></span></td>
                 <td><input type="text" class="insert" name="surname" placeholder="Surname..">
                 <br><span class="error"><?php echo  $surnameerr;?></span></td>
                </tr>
                <tr>
                 <td colspan="2"><input type="text" class="insert" name="mobile" placeholder="Mobile no. or E-mail Address.."><br>
                 <span class="error"><?php echo $mobileerr;?></span> </td>
                </tr>
                <tr>
                 <td colspan="2"><input type="password" class="insert" name="newpassword" placeholder="Password.."><br>
                 <span class="error"><?php echo $newpassworderr;?></span></td>
                </tr>
            </table>
                <h3 style="opacity: 0.7;" >Birthday</h3>
                <input type="date" name="birth" class="insert"><br>
                <span class="error"><?php echo $birtherr ?></span>
                <h3 style="opacity: 0.7;">Gender</h3>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other<br>
                <span class="error"><?php echo $gendererr; ?></span>
               
                <p>By clicking Sign Up, you agree to our Terms, Data Policy and
                     Cookie Policy.You may receive SMS notifications from us and
                      can opt out at any time.</p>
                <input class="submit" type="submit" value="Submit" name="submit">
            </form> 
        </div>
    </div>
</section>
</body>
</html>