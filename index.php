<?php
session_start();

//if(!isset($_Session['user']) && !isset($_Session['enabled'])){
//    header("Location: login.php");
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
</head>
<body>
<p> You are successfully logged in as: <?php echo $_SESSION['user']; ?> !</p>

</body>

</html>