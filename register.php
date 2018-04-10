<?php
session_start();
$flag=1;
if(isset($_POST['submit'])){
    
$user=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password1'];
$college=$_POST['college'];

    try{$db= new PDO('mysql:host=localhost;dbname=maya;charset=utf8','root','');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt=$db->prepare("insert into members (username,email,password,college) values(:username,:email,:password,:college)");
    
    $stmt->bindParam(':username',$user);
$stmt->bindParam(':password',$pass);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':college',$college);
        $_SESSION["user"]=$user;
if($stmt->execute())
{ header('location:thankyou.php');}}
    catch (PDOException $e)
    {
        $flag=0;
    }
$db = null;
     
}
?>







<html>
<body>
   <head> <title>
    Register
    </title>
       <a id=logo href="index.php"><img src="img/logo.jpg" id=logo ></a>
    
    <link href="login.css" type="text/css" rel="stylesheet">
    <style>
        #login{
            height:400px;
        }
       </style>
 <script>
       function checkinfo(){
           
                      
           var email=document.getElementById('email').value;
           
           var atpos=email.indexOf("@"); var dotpos=email.indexOf(".");
           if(atpos<1||dotpos<atpos+2||dotpos+2>=x.length){
           alert("Wrong Email");
           return false;}
           
       }
     var check = function() {
  if (document.getElementById('password1').value ==
    document.getElementById('password2').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
  }
}
    if(<?php echo $flag;?>==0)
        {alert("Username or Email already exist");}
       
       </script>
       
       
       
    </head>
    <br>
 <div id=login>
    <h2>Register</h2>
    <form method=post action="""<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return checkinfo()">
    
        
        
    <input type="text" name="email" placeholder="Enter Your Email" id="email" required>
               <br><br>
        <input type="text" name="username" id="username"placeholder="Pick a cool username" required>
               <br><br>
        <input type="password" name="password1" id="password1" placeholder="Enter Your Password" onkeyup=check(); required>
        <br><span id='message'></span><br>
        <input type="password" name="password2" id="password2" placeholder="Retype Your Password" onkeyup=check(); required>
        <br><br>
    <input type="text" name="college" id="college" placeholder="Enter Your College" required>
               <br><br>
    
        
        
        
        <input type="submit" id="button" name="submit" value="Register" >
        
    
    
        
    
    </form> 
    </div>
    
    </body>
    <br><br>
    <span id=bol>If Already Registered </span><br><br>
    <div id=button1>
     <a  href="login.php" > Login</a>
    </div>
</html>