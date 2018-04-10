<?php session_start();

?>
  


<html>
<style>
    body{
        background-image: url("img/_4e0b9a20-0ad5-11e7-814d-775bded0c5ff.jpg");
        background-size:cover;
        background-repeat: no-repeat;
        
    }
    h1{ text-align: center;
        left: 50%;
        display: block;
        font-family: sans-serif;
        font-size: 40px;
        color: orange;
        background-color: #10598E;
        padding: 100px;
        width: 450px;
        margin-left:300px; 
       
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
    </style>
<head></head>
    <?php session_unset(); ?>
    <body>
    <h1> Sucessfuly Logged Out </h1>
    
    
    
    <div id="login">  
    <button onclick="location.href='login.php'">
    Login
    </button></div></body> 
</html>