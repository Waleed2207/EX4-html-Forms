<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>waleed</title>
</head>
<body>

<section>
  
    <?php 
          $pw = $_GET['pass'];
          echo "<h2>Welcome ".$_GET["fullName"]."</h2>" ;
          
          if($pw == "Waled-1234"){
              echo "<h1> Thanks! " .$_GET["fullName"]." The Correct Password</h1>";
          }else { 
              echo "<h2> Try Again, The password is incorrect.</h2>";
          }
          echo "<h2> Your Email : " .$_GET["mail"]."</h2>";

    
    ?>
</section>
</body>
</html>