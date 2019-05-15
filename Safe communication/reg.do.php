<?php

include 'db.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 if($err == 0){
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['email'] = $email;
         $_SESSION['id'] = $row['id'];
         $_SESSION['name'] = $row['name'];
		 setcookie($email, $password, time() + (86400 * 30), "/");
         header("location: search.php");
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 }
 else{
	 header ('location: reg.php');
 }
?>