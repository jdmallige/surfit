<?php
session_start();
if(isset($_SESSION['email']))
{
    header('Location:home.php');
}?>

<html>
<head>
    <title>
    THE MAIN PAGE</title>
    
 <a id=logo href="index.php"><img src="img/logo.jpg" id=logo ></a>
    
    
    <link rel="stylesheet" href="index.css" type="text/css">
    </head>
<body>
 <div id=register>
     <p> New User </p>
    <button onclick="location.href='register.php'"> Register
     </button>
    </div>
    <div id=login>
    <p> Existing User </p>
    <button onclick="location.href='login.php'"> Login
     </button>
    


    </div>
</body>
<br>
    <br>
    <br>
    <div id=log>
    <a  href="https://www.facebook.com/surfit2k17"><img style="margin:20px;height:200px;width: 200px;"src="img/download.png"  ></a>
    <a  href="https://www.maayafest.com"><img style="margin:20px;" src="img/mayalogo.png"  ></a>
    </div>
    
</html>