<?php
require 'connect.php';
$username='';
$issue_name='';
$date=0;
$id=0;
$sql="SELECT * FROM appointment where id=:id";
$statement=$pdo->prepare($sql);
$id=$_GET['id'];
$statement->bindParam(":id",$id, PDO::PARAM_INT);
$statement->execute();

$data=$statement->fetchAll();
echo "<h2>";
foreach($data as $row){
    $username=$row['username'];
    $issue_name=$row['issue_name'];
    $date=$row['date'];
    
    echo 'User name '. $row['username']. '</br> Isuue '. $row['issue_name'] .'</br> Date '. $row['date'];
}
echo "</h2>";

if(isset($_POST['update'])){
$sql = "UPDATE appointment SET  username= :username issue_name=:issue_name date=:date where id = :id";
$statement = $pdo->prepare($sql);
$username = $_POST['username'];
$issue_name = $_POST['issue_name'];
$date = $_POST['date'];
$statement->bindParam(':username', $name, PDO::PARAM_STR);
$statement->bindParam(':issue_name', $issue_name, PDO::PARAM_STR);
$statement->bindParam(':date', $date, PDO::PARAM_INT);
$statement->execute();
$pdo=null;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>view user</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">
        <img src ="logo.jpg"alt="" width="60" height="48" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            appointments
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="request.php">Request appointment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="View.php">View appointments</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="edit.php">Edit appointment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="viewMine.php">View my appointments</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php" >logout</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<form method="post" action="edit.php">
    <div class="login-box">
        <label> username</label>
        <input type="text" name="username" value="<?php echo $username?> " required>

        <label> issue_name</label>
        <input type="text" name="issue_name" value="<?php echo $issue_name?>" required>

        <label> Date</label>
        <input type="text" name="date" value="<?php echo $date?>" required>
        <input type="hidden" name="id" value="<?php echo $id?>" required>

        <input type="submit" name="update" value="Edit">
    </div>
    </form>
    <a href="view.php"> view appointments </a>
</body>
</body>
</html>