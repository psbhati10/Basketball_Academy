<?php

$program = $_POST['program'];
$full_name = $_POST['full-name'];
$email = $_POST['email'];
$phone_number = $_POST['phone-number'];
$dob = $_POST['dob'];
$address_street = $_POST['address-street'];
$number = $_POST['number'];
$city = $_POST['city'];
$zip_code = $_POST['zip-code'];
$player_country = $_POST['player-country'];
$height_feet = $_POST['height-feet'];
$weight_kg = $_POST['weight-kg'];
$position = $_POST['position'];
$how_you_find_us = $_POST['how-you-find-us'];
$resume = $_POST['resume'];

$conn = mysqli_connect("localhost","root","","project");

$query = "INSERT INTO `programapplication` (`Program`, `Full_Name`, `Email`, `Phone _Number`, `DOB`, `Street_Name`, `Number`, `City`, `Zip`, `country`, `height`, `weight`, `position`, `find_out`, `bb_resume`) VALUES ('$program', '$full_name', '$email', '$phone_number', '$dob', '$address_street', '$number', '$city', '$zip_code', '$player_country', '$height_feet', '$weight_kg', '$position', '$how_you_find_us', '$resume')";

$result = mysqli_query($conn,$query);

header("location: main.html");

?>

<!-- INSERT INTO `programapplication` (`Program`, `Full_Name`, `Email`, `Phone _Number`, `DOB`, `Street_Name`, `Number`, `City`, `Zip`, `country`, `height`, `weight`, `position`, `find_out`, `bb_resume`) VALUES ('Premium', 'nakul', 'p@gmail.com', '7896452', '10/03/2001', '192 baes', '89657452', 'berlin', '974660', 'german', '7-10', '98', 'center', 'jksdfvbjndvkn', 'sdjvbjisbviushvbjlsvnhivijn'); -->