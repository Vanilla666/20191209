<?php
echo "Welcome ~ ". $_POST["name"]."<br>";
echo "Your love food is: ".$_POST["food"]."<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "1104";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM personalinformation WHERE food = '".$_POST["food"]."' AND name = '".$_POST["name"]."'";
if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>