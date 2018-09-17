<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atmmgt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT accno FROM cashwd";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "accno: " . $row["accno"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
