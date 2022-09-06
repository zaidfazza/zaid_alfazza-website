<?php

session_start();
require("connect.php");
if(isset($_POST ['login'])){
    $sql="SELECT * from login where username=:username and password=:password";
    $statement=$pdo->prepare($sql);
    $username=$_POST['username'];
    $password=$_POST['password'];

    $statement->bindParam(":username",$username,PDO::PARAM_STR);
    $statement->bindParam(":password",$password,PDO::PARAM_STR);
    $statement->execute();
    $count=$statement->rowCount();
    if($count==1){
        $_SESSION['privilleged']=$username;
        header("location:home.php");
    }else{
        echo "Invalid username or password";
    }
    $pdo=null;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post">
      <div class ="login-box">
        <h2>login here</h2>
        <div class="user-box">
            <label for="username">username</label>
            <input type="text" name="username" class="user-box"required>

        </div>
        <div class="user-box">
            <label for="password">password</label>
            <input type="password" name="password" class="user-box"required>
       <button id="login-btn" type="submit" name="login">login</button> 
      </div>
       <a  class="reg-link" href="register.php" > Register Here </a>
    </form>
  </div>

</body>
</html>