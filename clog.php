<?php
$u=$_GET['username'];
$p=$_GET['password'];
 
$connection=mysqli_connect('localhost','root','','bloodbank');
$command="SELECT * FROM signupinfo where username='$u'";
$result=mysqli_query($connection,$command);
if($result->num_rows >0){
    $command="SELECT * FROM signupinfo where username='$u' and password='$p'";
$result=mysqli_query($connection,$command);
if($result->num_rows >0){
    echo"log in succesfully";
    if(isset($_GET['remember'])){
        setcookie("user" ,$u ,  time()+2000000);
      
}
else{
    setcookie("user", $u , time()+10);
  
}
header('Location:/bloodbank/home.php');
}
else{
    setcookie('error','wrong password', time()+5);
    header('Location:/bloodbank/login.php');
} 
}
else{
    setcookie('error','wrong username', time()+5);
    header('Location:/bloodbank/login.php');
}

?>