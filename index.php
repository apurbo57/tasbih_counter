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

    // Subhan Allah function start
    if(isset($_POST['subhanallah'])){
            if(empty($_SESSION['subhanallah'])){
                $_SESSION['subhanallah'] = 1;

            }else{
                $subhanallah = $_SESSION['subhanallah'] + 1;
                $_SESSION['subhanallah'] = $subhanallah;
            }
        }
        if(isset($_POST['reset_subhan'])){
            $_SESSION['subhanallah'] = 0;
            header("location: index.php");
        }
    // Subhan Allah function end


    // alhamdulillah function start
    if(isset($_POST['alhamdulillah'])){
            if(empty($_SESSION['alhamdulillah'])){
                $_SESSION['alhamdulillah'] = 1;

            }else{
                $alhamdulillah = $_SESSION['alhamdulillah'] + 1;
                $_SESSION['alhamdulillah'] = $alhamdulillah;
            }
        }
        if(isset($_POST['reset_alham'])){
            $_SESSION['alhamdulillah'] = 0;
            header("location: index.php");
        }
    // alhamdulillah function end


    // allahu akbar function start
    if(isset($_POST['allahuakbar'])){
            if(empty($_SESSION['allahuakbar'])){
                $_SESSION['allahuakbar'] = 1;

            }else{
                $allahuakbar = $_SESSION['allahuakbar'] + 1;
                $_SESSION['allahuakbar'] = $allahuakbar;
            }
        }
        if(isset($_POST['reset_allahu'])){
            $_SESSION['allahuakbar'] = 0;
            header("location: index.php");
        }
    // allahu akbar function end
        
   ?>

  <div class="main">
    <div class="twarp">
      
   <div class="display"> <span id="tnum" ><?php if(empty($_SESSION['subhanallah'])){
    echo '0';
  }else{
    echo $_SESSION['subhanallah'];
  } ?></span></div>


 <div class="btnwrap">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <input class="tbtn" type="submit" value="Subhan Allah" name="subhanallah">
          <input class="rbtn" type="submit" value="Reset" name="reset_subhan">
      </form>
</div>

    </div>
</div>

<div class="main">
    <div class="twarp">
      
   <div class="display"> <span id="tnum" ><?php if(empty($_SESSION['alhamdulillah'])){
    echo '0';
  }else{
    echo $_SESSION['alhamdulillah'];
  } ?></span></div>


 <div class="btnwrap">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <input class="tbtn" type="submit" value="Alhamdulillah" name="alhamdulillah">
          <input class="rbtn" type="submit" value="Reset" name="reset_alham">
      </form>
</div>

    </div>
</div>

<div class="main">
    <div class="twarp">
      
   <div class="display"> <span id="tnum" ><?php if(empty($_SESSION['allahuakbar'])){
    echo '0';
  }else{
    echo $_SESSION['allahuakbar'];
  } ?></span></div>


 <div class="btnwrap">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <input class="tbtn" type="submit" value="Allahu Akbar" name="allahuakbar">
          <input class="rbtn" type="submit" value="Reset" name="reset_allahu">
      </form>
</div>

    </div>

  </div>

<p style="text-align:center; margin-top: 100px;">The app is created by <a href="https://www.facebook.com/APURBO.STAR/" style="color:blue; text-decoration:none;">APURBO</a></p>
</body>

</html>