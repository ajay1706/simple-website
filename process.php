<?php
if (isset($_POST['submit'])) {


$to = "ajay97456@gmail.com";
$subject = $_POST['subject'];
$email = $_POST['email'];
$txt = $_POST['message'];
$headers = "From: ". $email . " \r\n".
"cc: ajaysharma@bash11.com";

  // code...
  mail($to , $subject , $message, $headers);
  header("Location: contat.html");
}

 ?>
