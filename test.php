<?php
define('DB_NAME', 'invcovmy_rsvp');
define('DB_USER', 'invcovmy_adamkg');
define('DB_PASSWORD', 'LedZeppelin2');
define('DB_HOST', 'localhost');

$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($link->connect_error) {
	die('Could not connect: ' . $link->connect_error);
}
echo 'Connected successfully \n';

$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$attending = $_POST["headcount"];
$number = $_POST["headcount"]
$email = $_POST["email"];
	
$sql = "INSERT INTO rsvp (last_name, first_name, attending, number, email) VALUES ('$lastname', '$firstname', '$attending', $number, '$email')";

if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}
?>