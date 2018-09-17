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
$sql="INSERT INTO account (accno,mbal,acctype) VALUES ('$_POST[accno]','$_POST[mbal]','$_POST[acctype]')"; 
if($conn->query($sql)) 
echo "1 record added"; 
$conn->close();   ?> </body> </html>
