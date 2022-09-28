<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<a class="float-end"  href="home.php"><img src="home.svg">HOME</a>
       <div class="logbox">
<h2 class="text-center">Log In</h2>
<?php
    if(isset($_COOKIE['error'])){
  echo'<p style="color:red">'.$_COOKIE['error'].'</p>';
  setcookie("error","",time()-10);
    }
    ?>
<form method="get" action="clog.php">
  <input class="form-control" type="username" placeholder="Enter your Username" name="username"><br>
  <input class="form-control" type="password" placeholder="Enter your Password" name="password">
  <input type="checkbox"  name="remember">Remember me<br>
  <button type="submit" class="btn btn-outline-danger">Log in</button> <br><br>
  <img src="samuel-regan-asante-JjlkGAc4OUM-unsplash.jpg" class="img-fluid" alt="..."">
 </div>

  </form>


 

</body>
</html>