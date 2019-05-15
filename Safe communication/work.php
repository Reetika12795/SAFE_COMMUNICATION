<?php
	session_start();
include 'db.php';
?>
<?php

$id =  $_SESSION['id'];
$email = $_GET['person'];
$mess = $_GET['mess'];
echo $email.$mess;
$fir = strpos($email,"( ");
$las = strpos($email," )");
$mail = "";
echo $fir.$las;
for ($i=$fir+2; $i < $las; $i++) { 
	$mail = $mail.$email[$i];
}
echo $mail;
$sql = "SELECT id FROM users WHERE email = '$mail'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);
$rid = 0;
 if($count == 1) {
        $rid = $row['id'];
      }
else {
		 echo "error1";
      }
echo "Reci - ".$rid;
if ($rid !=0){
$id =  $_SESSION['id'];
             $sql = "INSERT INTO message (senderid, receiverid, mess) VALUES ('$id', '$rid', '$mess')";
          if ($conn->query($sql) === TRUE) {
                      echo "Done";
             }
           else{
                             echo "Error";
               }
}
else{
           echo "No address found";
}


?>