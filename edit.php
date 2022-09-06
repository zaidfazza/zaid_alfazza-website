<?php
$id=0;
require 'connect.php';
if(isset($_POST['update'])){
$sql = "UPDATE appointment SET username=:username, issue_name=:issue_name, date=:date
 where id=:id";
$statement = $pdo->prepare($sql);
$username = $_POST['username'];
$issue_name = $_POST['issue_name'];
$date = $_POST['date'];
$id=$_POST['id'];
$statement->bindParam(':username',$username, PDO::PARAM_STR);
$statement->bindParam(':issue_name',$issue_name, PDO::PARAM_STR);
$statement->bindParam(':date',$date, PDO::PARAM_STR);
$statement->bindParam(':id', $id, PDO::PARAM_INT);
$statement->execute();

}
echo "Employee with id $id is succesfullly updated <br>";
$sql="SELECT * FROM appointment where id=$id";
$statement=$pdo->prepare($sql);
$statement->execute();
$data=$statement->fetchAll();
echo "<h2>";
foreach($data as $row){
    echo $row['username']. ' '. $row['issue_name'] .' '. $row['date'];
    echo "<br>";
}
echo "</h2>";
$pdo=null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit appointments</title>
</head>
<body>
<a href="view.php"> view appointments </a>
</body>
</html>