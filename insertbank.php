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
$sql="INSERT INTO bank (accno,bname) VALUES ('$_POST[accno]','$_POST[bname]')"; 
if($conn->query($sql)) 
echo "1 record added"; 
$conn->close();   ?> </body> </html>
