<?php
require("connect.php");

if($_SERVER['REQUEST_METHOD']=='POST'){
$sql="INSERT INTO login (username,password) values (:username,:password)";
$statement=$pdo->prepare($sql);
$username=$_POST['username'];
$password=$_POST['password'];

$statement->bindParam(":username",$username,PDO::PARAM_STR);
$statement->bindParam(":password",$password,PDO::PARAM_STR);
$statement->execute();

echo "new user is added succefully, go to login ";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registeration </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST">
  <div class="reg-box"> 
  <h2>Register Here</h2>
    <label for="username">Username</label>
    <input type="text" name="username"  required>
    <label for="password">Password</label>
    <input type="password" name="password"  required> 
    <button type="submit" name="register">Register </button>
        
    <a  class="reg-link" href="login.php" > Login Here </a>
  </div>
</form>
  
</body>
</html>