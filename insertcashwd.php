</body> 
</html>
<html> 
<body> 
<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "atmmgt"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
$sql="INSERT INTO cashwd (accno,dpamt,date) VALUES ('$_POST[accno]','$_POST[dpamt]','$_POST[date]')"; 
if($conn->query($sql)) 
echo "Entered amount has been withdrawen from your accountno " . $_POST["accno"]. "<br>";
echo "Withdrawen amount" . $_POST["dpamt"]. "<br>";
$sql="select mbal from account where accno='$_POST[accno]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "current acc bal: " . $row["mbal"]. "<br>";
            }
} else {
    echo "0 results";
}
$conn->close();   ?> </body> </html>
