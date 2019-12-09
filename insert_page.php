<?php
echo "Welcome ~ ". $_POST["name"]."<br>";
echo "Your email address is: ".$_POST["food"]."<br>";
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
$sql = "INSERT INTO personalinformation (name, food) VALUES ('". $_POST["name"]."', '".$_POST["food"]."')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>