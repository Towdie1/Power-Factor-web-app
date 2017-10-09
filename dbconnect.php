<?php
$servername = "localhost";
$username = "towdie";
$password = "Sp4nk1ngs";
$dbname = "pf_data";
$member_id = 1;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE members SET name='Rob' WHERE member_id=$member_id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>