<?php
define('DB_NAME', 'invcovmy_rsvp');
define('DB_USER', 'invcovmy_adamkg');
define('DB_PASSWORD', 'Sept29th2018');
define('DB_HOST', 'localhost');

$link = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$attending = $_POST["radio"];
$number = $_POST["headcount"];
$email = $_POST["email"];
	
$sql = "INSERT INTO rsvp (last_name, first_name, attending, number, email) VALUES ('$lastname', '$firstname', '$attending', '$number', '$email')";
if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "";

if ($link->query($sql) === TRUE) {
    echo "";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<html>
	<link rel="stylesheet" href="thanks.css">
	<title> Greenwoods Wedding </title>
	<link href="https://fonts.googleapis.com/css?family=Clicker+Script|Open+Sans+Condensed:300|Pompiere|Raleway|Saira+Extra+Condensed|Wire+One" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<h1>Thanks <?php echo $_POST["firstname"] . '!'; ?></h1>

<h2>

<?php
if ($attending=="yes") {
	echo "We look forward to seeing you!<br>";
}
if ($attending=="no") {
	echo "Sorry we will miss you!<br>";
}
?>
<a class=navbutton href="index.html">Home</a>
</h2>



</body>
</html>