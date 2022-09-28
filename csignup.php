<?php
$fn=$_POST['fullname'];
$ag=$_POST['age'];
$g=$_POST['gender'];
$u=$_POST['username'];
$p=$_POST['password'];
$bg=$_POST['bldgrp'];
$eml=$_POST['email'];
$nmbr=$_POST['number'];
$fdbk=$_POST['feedback'];
$adrs=$_POST['address'];
$image='';
if($_FILES['myimage']['name']){
    move_uploaded_file( $_FILES['myimage']['tmp_name'] , 'images/'.$_FILES['myimage']['name']  );
    $image='images/'.$_FILES['myimage']['name'];
    }


$connection=mysqli_connect('localhost','root','','bloodbank');
$command="INSERT INTO signupinfo values ('$fn','$ag','$g','$u','$p','$bg','$eml','$nmbr','$fdbk','$adrs','$image',NULL)";
$result=mysqli_query($connection,$command);
if($result){
    header('Location:/bloodbank/login.php');
}
else{
 echo $connection-> error;
}

?>

