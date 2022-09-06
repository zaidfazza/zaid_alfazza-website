<?php
session_start();
if(!isset($_SESSION['privilleged'])){
  header("location:login.php");
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
    <title>Home</title>
</head>
<body style="background: url(background.jfif) no-repeat fixed center ;">

    
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
    <div> <p style="background-color:limegreen; width: 180px;">  logged in succesfully  <br> Welcome: 
        <?php echo $_SESSION['privilleged'] ?> </p> </div> 
        <h3> About Us</h3>
        <p2 style="width: 180px;">MONKEY <br>Welcome MONKEY to the IT Support Center, focusing the efforts of support teams within IT Services so you can easily get the assistance you need. </p2>
        <h4>How to Contact Us</h4>
        <h5>Request appointment</h5>
        <p3>you can Request appointment using the nav bar  and we will replie to you as soon as we can <3</p3>
</body>
</html>