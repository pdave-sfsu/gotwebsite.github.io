<?php
// Create connection
$con=mysqli_connect('setapproject.org','csc412','csc412','csc412');

// Check connection
if (mysqli_connect_errno($con)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$user_quote = "'" . $_POST["quote"] . "'";
$user_author = "'" . $_POST["author"] . "'";
$sql = "INSERT INTO `PDave`(`quote`, `author`) VALUES (" . $user_quote . ", " . $user_author . ")";
$con->query($sql);

echo "<h1>Thank you for your quote!</h1>";

$result = mysqli_query($con,"SELECT * FROM PDave");

while($row = mysqli_fetch_array($result)) {
  echo $row['Quote'] . " - " .  $row['Author'];
  echo "<br>";
}
mysqli_close($con);
?>