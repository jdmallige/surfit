<?php session_start();
$ans='';
if(!isset($_SESSION['email']))
{
    header('Location:index.php');
} 

$email=$_SESSION['email'];
$dbc = mysqli_connect('localhost', 'root','' ,'maya' );
if (!$dbc) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="select level from members where email='$email'";
$re=mysqli_query($dbc,$sql);
if (mysqli_num_rows($re) > 0){

$level=mysqli_fetch_assoc($re);
 $level=$level['level'];
    echo $level;
    
}
$sqll="select * from levels where no=$level";
$res=mysqli_query($dbc,$sqll); 
$result=mysqli_fetch_assoc($res);
if(mysqli_num_rows($res)>0){
    $clue=$result['clue'];
$answer1=$result['answer1'];
$answer2=$result['answer2'];    
}
if(isset($_POST['submit']))
 {$ans=$_POST['answer'];  
  if($answer1==$ans||$answer2==$ans)
{
    echo "correct answer";
    $_SESSION['answer']="corrct";
    header('location:nextlevel.php');
      
    
}}



?>


<html>
<head>
    <title>Surf IT oth</title>
    <a id=logo href="index.php"><img src="img/logo.jpg" id=logo ></a>
    <ul>
    <li><a href="home.php">Home </a></li>
    <li><a href="leader.php">Leader Board </a></li>
    <li><a href="rules.html">Rules</a></li>
    <li><a href="logout.php">Log out</a></li>
    </ul>
    <link href="home.css" type="text/css" rel="stylesheet">
    <script>
    if(<?php echo $level?> >=16)
        {
            alert("YOu finished the game ");
            window.location.href ="logout.php";
        }
    
    </script>
    
    
    </head>
    
    <body>
    
   <br><br>
    
    <div id="img">
        
         <h1><?php echo $clue;?> </h1>
        <img  style="height:400px;width:500px;" align="middle" src="img/<?php echo $level.".jpg";?>">    
        
        </div>
    <div id="ans">
            
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <input type="text" name="answer" placeholder="Enter your answer here" >
        <br> <br>
        <input type="submit" id="button" name="submit" value ="SUBMIT">
        <br>
        </form>
        </div>
    </body>







</html>