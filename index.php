<?php

session_start();
$nam = array("Sam Espino", "Shae Smith", "Third Lee");
$ema = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");
$found = false;
$ctr = 3;

if (isset($_POST['name'])) {
    $email = $_POST['name'];
    $password = $_POST['password'];
    if($email != $found && $password != $found){
        if($email == $ema['0'] && $password == $pas['0']){
            $_SESSION["name"]=$nam[0];
            header('Location: profile.php?'.$nam['0']);
        }else if($email == $ema['1'] && $password == $pas['1']){
            $_SESSION["name"]=$nam[1];
            header('Location: profile.php?'.$nam['1']);
        }else if($email == $ema['2'] && $password == $pas['2']){
            $_SESSION["name"]=$nam[2];
            header('Location: profile.php?'.$nam['2']);
        }else{
            header('Location: register.html');
        }
        
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

body {font-family: Arial, Helvetica, sans-serif;
    background-color: #D0ECE7;}
    
    
    input[type=text], input[type=password]  {
      width: 900px;
      padding: 12px 20px;
      margin: 5px;
      /* display: inline-block; */
      border: 2px solid #000000;
      /* box-sizing: border-box; */
      border-radius: 10px;
      
    }
    
    button {
      background-color: #16A085;
      color: white;
      padding: 14px 20px;
      margin: auto;
      border: none;
      cursor: pointer;
      border-radius: 17px;
      border: solid;
      width: 150px;
    }

    .imgcontainer {
      text-align: center;
      margin-bottom: 50px;
      margin-top: 50px;
    }
    
    img.avatar {
      width: 150px;
    }
    
    .container {
      padding: 16px;
      margin: auto;
    }
    
    span.psw {
      float: right;
      padding-top: 16px;
    }
    .boxdesign{
        background-color: white;
        border-radius: 20px;
        text-align: center;
        width: 70%;
        margin-top: 150px;
        margin-left: 200px;
    }

    .left {
        width: 65%;
      }
      
      .right {
        width: 35%;
      }


    </style>
</head>
<body>

    <div class="boxdesign">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="imgcontainer">
                <img src="robot.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="name"><b></b></label>
                <input type="text" placeholder="Enter Email" name="name" required>

                <label for="password"><b></b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button name="submit" class="action_btn submit" type="submit" >Sign In</button>
                <button name="reset" class="action_btn cancel" type="reset">Clear</button>
                
            </div>
    </div>
    </form>
</body>

</html>
