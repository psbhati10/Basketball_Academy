<?php



$email = $_POST['email'];
$conn = mysqli_connect("localhost","root","","project");

$sql = "INSERT INTO `newsletter` (`email`) VALUES ('$email')";

$result = mysqli_query($conn,$sql);     
header("location: main.html");
?>