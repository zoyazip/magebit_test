<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "submittedEmails";
$id = $_POST["id"];
$email = $_POST["email"];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
																								// REMOVES SELECTED EMAILS FROM DATABASE
if (isset($_POST["delete"])) {
		$selected = $_POST['checkbox'];
		foreach ($selected as $id) {
			mysqli_query($conn, "DELETE FROM `Emails` WHERE id=".$id);
		}
		header("Location: ../submittedEmails.php");
	}

 ?>