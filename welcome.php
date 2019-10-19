<?php 
session_start();

$user = $_SESSION['user'];
$pass = $_SESSION['password'];

if($user == true && $pass == true)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>
<script type="text/javascript">
function logout(){
window.location ='logout.php';
}	
</script>

</head>
<body>
<h1>welcome to Admi  page</h1>
<h2><?php echo "welcome  ".$user ?></h2>
<button class="btn btn-success" onclick="logout()">logout</button>
</body>
</html>

<?php 
}
else
{
//echo "<script>window.location='login.php'</script>";
echo "<script>window.location='login_md5.php'</script>";
die();
}





?>