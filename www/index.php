<?php
$servername = "db";
$username = "user";
$password = "test";
$dbname = "stage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, nom, prenom FROM stagiaire";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
    	echo "ID: " . $row["id"]. " - Name: " . $row["nom"]. " " . $row["prenom"]. "<br>";
	}
} else {
	echo "0 results";
}
$conn->close();
?>

