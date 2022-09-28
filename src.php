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
<a class="float-end" href="home.php"><img src="home.svg">HOME</a>
  
  <h1 class="text-center">Our bank has all type of blood</h1><br>
  <p  class="text-center">If you searching for blood from a bank.<br><a href="#">Contact us</a></p>
  <h1 class="text-center">Searching for A Blood Donar<br>Search below</h1>
  <div class="text-center">
  <img src="noun_Arrow_6635.png" class="rounded" alt="...">
</div>
  <h1 >Search for your blood</h1>
  <div id="col1">
  <form method="post" action="src.php">
  <p>Enter blood group </p>
           <select  class="form-control" type="input" name="bldgrp" >
             <option>select your blood group</option>
           <option>A+</option>
           <option>A-</option>
           <option>B+</option>
          <option>B-</option>
           <option>O+</option>
           <option>O-</option>
           <option>AB+</option>
           <option>AB-</option>
           </select><br>
           
           <button type="submit"  name="submit" class="btn btn-outline-danger">Search</button>
</div>
</form>
  <div class="container py-5">
    <div class="row mt-4">
    <?php


$connection=mysqli_connect('localhost','root','','bloodbank');
if(isset($_REQUEST['submit'])){
  $rcv=$_REQUEST['bldgrp'];

  


$command="select * from signupinfo where bldgrp='$rcv' ";
$result=$connection->query($command);
if($result->num_rows> 0){
while($row=mysqli_fetch_assoc($result)){
?>

 <div class="col-md-3">
      <div class="card" style="width: 15rem";> 
      
    <?php
echo"<img  src=".$row['image'].">"
?>


     <div class="card-body">
      <h2 class="card-title" > Name:&nbsp;<?php echo $row['fullname']?></h2>
             </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Blood-Group:&nbsp;<?php echo $row['bldgrp']?></li>
              <li class="list-group-item">Number:&nbsp;<?php echo $row['number']?></li>
              <li class="list-group-item">Adress:&nbsp;<?php echo $row['address']?> </li>
            </ul><br>  
          </div><br>
      </div> 
      
  <?php
  
  
}
}
}

?>
</body>

</html>
