
<script>alert("hi");</script>
<?php


include ("dbconnect.php");
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
$name = $_POST['username'];
$password = $_POST['password'];
 $qry="SELECT * FROM login WHERE username = '".$name."' AND password = '".$password."';";
 
 $result=mysql_query($qry);
 

$hello= mysql_fetch_assoc($result);
echo $hello['role'];

if ($hello['role'] == 'teacher'){ include "teacherlog.html";}
else if ($hello['role'] == 'trainer'){include "trainerlog.html";}
else if($hello['role'] == 'admin'){include "Adminl.html";}  

mysql_close($con);
?>
