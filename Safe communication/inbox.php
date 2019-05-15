<?php
session_start();
   include("db.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title> Chat Detector </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<table class="w3-table-all w3-large">
    <tr class="w3-green">
      <th>Name</th>
      <th>Message</th>
      <th>Time</th>
    </tr>
<?php
$myid = $_SESSION['id'];
 $sql = "SELECT * FROM message RIGHT JOIN users ON message.senderid=users.id WHERE receiverid='$myid'";
$result = mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($result) ){
         $link = "http://mayankgbrc.pythonanywhere.com/?data=".$row['mess'];
         $data=file_get_contents($link);
         echo "<tr><td>".$row['name']."</td><td>".$data."</td><td>".$row['time']."</td></tr>";
}

?>
</table>