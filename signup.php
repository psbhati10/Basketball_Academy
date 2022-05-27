
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost","root","","project");
// if(!$conn){
//     echo "not connected";
// }
// else{
//     echo "connected";   
// }

$sql = "INSERT INTO `signup` (`name`, `email`, `number`, `password`) VALUES ('$name', '$email', '$number', '$password')";
$result = mysqli_query($conn,$sql);
header("location: main.html");
?>
