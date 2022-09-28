<head>
<script src="https://kit.fontawesome.com/0254c9113c.js" crossorigin="anonymous"></script>
    <head>
<body class="wbody" >


<!-- Code begins here -->
 

    <!--.....................................................header part.................................................................... -->
    
    <div class="header">

    <img src="modern-blood-donation-logo-with-blood-drop_111630-415.jpg" class="logo" alt="error"> &emsp;
        <a class="headera" href="home.php">Home</a>
        <?php
       if(isset($_COOKIE['user'])){
       echo' <a class="headera" href="src.php">search Blood</a>';
    
       echo' <a class="headera" href="logout.php">Log out</a>';
      
       }
        else{
           echo' <a class="headera" href="login.php">log in</a>';
      echo'  <a class="headera"href="signup.php">sign up</a>';
        }
        ?>
        

    </div>
    
    <br>
    
    </body>