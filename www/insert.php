 <?php
$servername = "db";
$username = "user";
$password = "test";
$dbname = "stage";

$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO stagiaire (id,nom, prenom) VALUES ('$id','$nom','$prenom')";

if ($conn->query($sql) === TRUE) {
    echo "New record $id created successfully with last name:$nom and name:$prenom";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>
