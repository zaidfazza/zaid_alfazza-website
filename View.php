<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">    
    <title>appointments</title>
    <style>
         th,td
          {border-bottom: 1px solid #ddd;}

         tr:hover
          {background-color: #D3D3D3;}
    </style>
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
<?php
require 'connect.php';
$sql="SELECT * FROM appointment";
$statement=$pdo->prepare($sql);
$statement->execute();
echo "<table style='border:1px solid; width:80%; text-align:center; margin:auto;'>";
echo "<tr>";
echo "<th> user name </th>";
echo "<th> issue </th>";
echo "<th> date </th>";
echo "<th> Edit </th>";
echo "<th> Delete </th>";
echo "</tr>";
$data=$statement->fetchAll();
    foreach ($data as $row) {
        echo "<tr>".
         "<td>" . $row['username']." </td>".
        " <td> ". $row['issue_name'] . " </td>" 
        ."<td>" . $row['date'] . "</td>".
         "<td>" ." <a href=viewmine.php?id=".$row['id']."> edit </a>
        </td>".
        "<td> <a href=delete.php?id=".$row['id']."> delete </a> </td>".
        "</tr>";
    }

echo "</table>";
$pdo=null;
?>
</br>
</br>
<a href="request.php"> request appointment </a>
    
</body>
</html>

