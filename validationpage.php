<?php
include_once 'connection.php';
if(isset($_POST['submit']))
 {
  $name = $_POST["name"];
  $email =$_POST["email"];
  $mobile = $_POST["mobile"];
  $website = $_POST["website"];
  $comment = $_POST["comment"];
  $gender =$_POST["gender"];
$sql = "INSERT INTO formdetails (name,email,mobile,website,comment,gender)
     VALUES ('$name','$email','$mobile','$website','$comment','$gender')";
     if (mysqli_query($conn, $sql)) {
	header('location:dbprocess.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>