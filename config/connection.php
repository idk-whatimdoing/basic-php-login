 <?php
$servername = "localhost";
$username = "";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=myapp", $username, $password);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 
