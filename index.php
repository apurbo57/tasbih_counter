<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Tasbih</title>
</head>

<body>

  <h1 class="h">Tasbih</h1>

  <?php 

    if(isset($_POST['count'])){
            if(empty($_SESSION['count'])){
                $_SESSION['count'] = 1;

            }else{
                $count = $_SESSION['count'] + 1;
                $_SESSION['count'] = $count;
            }
        }

        if(isset($_POST['reset'])){
            session_destroy();
            header("location: index.php");
        }
        
    
   ?>

  <div class="main">
    <div class="twarp">
      
   <div class="display"> <span id="tnum" ><?php if(empty($_SESSION['count'])){
    echo '0';
  }else{
    echo $_SESSION['count'];
  } ?></span></div>


 <div class="btnwrap">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <input class="tbtn" type="submit" value="Count" name="count">
          <input class="rbtn" type="submit" value="Reset" name="reset">
      </form>
</div>

    </div>

  </div>

<p style="text-align:center; margin-top: 100px;">The app is created by <a href="https://www.facebook.com/APURBO.STAR/" style="color:blue; text-decoration:none;">APURBO</a></p>
</body>

</html>