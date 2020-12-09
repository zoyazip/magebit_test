<!DOCTYPE html>
<html>
<head>
	<title>Submitted Emails</title>
</head>
<body>
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
																													// SORT
$sql = "SELECT * FROM Emails";
	if(isset($email)){
		$sql = "SELECT * FROM Emails ORDER BY Email";
	}
	elseif (isset($id)) {
		$sql = "SELECT * FROM Emails ORDER BY date";
	}
	?>
<form method="POST" action="./php/deleteEmail.php">
																							<!-- DISPLAY A FETCH DATA FROM DATABASE -->
	<?php
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<input type='checkbox' name='checkbox[]' value='" .$row["id"] . "'>" ."id: " . $row["id"]. " - Email: " . $row["Email"]. " - Time: " . $row["date"] . "<br>";
  }
} else {
  echo "0 results";
}
?>
<input type="submit" name="delete" value="Delete Email">
</form>
	<form action="" method="POST">
		<input type="submit" name="id" value="Sort By Date">
		<input type="submit" name="email" value="Sort by Email">
		<input type="text" name="search" placeholder="Search by domain">
		<input type="submit" name="searchBtn" value="Search!">
	</form>
</body>
</html>
<?php
		 																												// SEARCH ENGINE
	if (isset($_POST["searchBtn"])) {
		$search = mysqli_real_escape_string($conn, $_POST["search"]);
		$sqli = "SELECT * FROM Emails WHERE Email LIKE '%$search%'";
		$resultI = mysqli_query($conn, $sqli);
		$queryResult = mysqli_num_rows($resultI);

		if ($queryResult > 0) {
			while($row = mysqli_fetch_assoc($resultI)){
				echo "id: " . $row["id"]. " - Email: " . $row["Email"]. " - Time: " . $row["date"] . "<br>";
				
			}
		}
		else{
			echo "There is no result";
		}
	}

$conn->close();
?>

















