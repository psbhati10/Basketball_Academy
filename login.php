<?php



$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost","root","","project");
// if(!$conn){
//     echo "not connected";
// }
// else{
//     echo "connected";   
// }

// $query  = "INSERT INTO `logi` (`username`, `email`, `bus_no`, `address`, `password`, `confirm_password`) VALUES ('$username', '$email', '$bus_no', '$address', '$password', '$confirm_password')";
//$sql = "INSERT INTO 'login'('email', 'password') VALUES ('$email', '$password')";
  $sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password')";
$result = mysqli_query($conn,$sql);     
header("location: main.html");

?>


