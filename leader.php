<?php session_start();
$db=new PDO("mysql:host=localhost;dbname=maya;charset=utf8","root","");
$stmt=$db->query("select username,college,level,time from members order by level desc,time asc");

if(!isset($_SESSION['email']))
{
    header('Location:index.php');
} 
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
    </ul>s
    <link href="leader.css" type="text/css" rel="stylesheet">
    
    
    </head>
    <br><br><br><br><br>
    <table border="2px">
    <?php echo " <tr><th>Rank</th><th>Username</th><th>College</th><th>Level</th><th>Time</th></tr>";$rank=1;
     while($row=$stmt->fetch(PDO::FETCH_ASSOC))
           {   
    echo "<tr><td>$rank</td><td>{$row['username']}</td><td>{$row['college']}</td><td>{$row['level']}</td><td>{$row['time']}</td>
        </tr>";  $rank=$rank+1;
     if($rank==41)
     break;}  
    
    ?>
    
    </table>
    
    <body>