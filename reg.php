
<?php
session_start();
 
include('connection.php');
 
$name1=$_POST['stu1'];
$name2=$_POST['stu2'];
$usn1=$_POST['usn1'];
$usn2=$_POST['usn2'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

 
mysqli_query($conn, "INSERT INTO login VALUES ('$name1','$mobile','$email','$name2','$usn1','$usn2')");
 
header("location: index.html?remarks=success");
 
mysqli_close($conn);
?>


?>
