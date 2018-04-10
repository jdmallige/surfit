<?php

session_start();
$email=$_SESSION['email'];
$dbc=mysqli_connect("localhost","root","","maya");
if(!$dbc)
{
    echo "connection error" . mysqli_connect_error();
    
}
$sql="update members set level=level+1,time=NOW() where email='$email' ";
if(mysqli_query($dbc,$sql)){
    echo "";
}
   ?>
<html>
<head>
    <style>
        body{
            background-image: url(img/2788919_Cap_quang_Internet_FTTH_FTTB.png);
            background-size: cover;
            background-repeat: no-repeat;}
            h1{ text-align: center;
        left: 50%;
        display: block;
        font-family: sans-serif;
        font-size: 40px;
        color: orange;
        background-color: #10598E;
        padding: 100px;
        width: 450px;
        margin-right:300px; 
       
        border-radius:20px;} 
    #login{ text-align: center;
      margin-left: 330px; opacity: 0.9;
    border-radius:20px; 
    opacity:0.85; 
    width:480px;
    height:300px;
    position: absolute;text-align: center;display: block;
}
button{
    background-color:white; text-align: center;
    border: 5px solid #4CAF50;
    width: 150px;
    height:60px;
    border-radius:10px;
    color: black;
    font-family: sans-serif;
    font-size: 20px;
    opacity:1; position:fixed;
}
button:hover{
    background-color: black;
    color:white;
    transition-duration: 0.5s;
    font-weight: 400;
    font-size: 24px;
}
        }
   </style> 
    </head>
    <body>
    <div id="login"> 
    <h1>CONGO You Gave right answer !!</h1>
    
    
    <br><br>
     
    <button onclick="location.href='home.php'">
    Next Level
    </button></div>
</body>
</html>