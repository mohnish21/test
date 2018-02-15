<!--php code starts-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Code FROM questions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li><a href=\"#\">" . $row["Code"] . "<a></li>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
