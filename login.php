<?php 
session_start();
if(isset($_POST['submit'])){
    
$email=$_POST['email'];
$pass=$_POST['password1'];
    $db=new PDO('mysql:host=localhost;dbname=maya;charset=utf8','root','');
    $stmt=$db->prepare("select * from members where email ='$email'  and password ='$pass' ");
    //$stmt->bindParam(':email',$email);
    //$stmt->bindParam(':pass',$pass);
    $result=$stmt->execute();
      $n=$stmt->rowCount();
    if($n==1)
    { $_SESSION['email']=$email; 
    header('location:home.php');
    } 
else
    $val ="false";}
?>


<html>
<body>
   <head> <title>
    LOGIN
    </title>
       <script>
       function checkinfo(){
           
                      
           var email=document.getElementById('email').value;
           
           var atpos=email.indexOf("@"); var dotpos=email.indexOf(".");
           if(atpos<1||dotpos<atpos+2||dotpos+2>=x.length){
           alert("Wrong Email");
           return false;}
          
       }
    var data = <?php echo json_encode($val, JSON_HEX_TAG); ?>;
    if(data=="false"){
        alert("wrong USErname and pass")
    }
           
       </script>
       
       
       
      <a id=logo href="index.php"><img src="img/logo.jpg" id=logo ></a>
        
    <link href="login.css" type="text/css" rel="stylesheet">
      </head>
    <br>
 <div id=login>
    <h2>LOGIN</h2>
    <form method="post" onsubmit="return checkinfo()" action="<?php $_SERVER['PHP_SELF'];?>" >
    
        
        
        <input type="text" name="email" placeholder="Enter Your Email" required>
       <br><br>
        <input type="password" name="password1" placeholder="Enter Your Password" required >
        <br><br>
        
        
        <input type="submit" id="button" name="submit" value="Login" >
        
    
    </form> 
    </div>
    <br><br>
    <span id=bol>If Not Registered </span><br><br>
    <div id=button1>
     <a  href="register.php" > Register</a>
    </div></body>
</html>