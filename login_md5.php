<?php 
session_start();
$result="";
include("con1.php");

if(isset($_POST['submit']))
{
$racc = $_POST['racc'];
$pass = $_POST['pass'];
$racc = strip_tags($racc);
$racc = addslashes($racc);
$pass = strip_tags($pass);
$pass = addslashes($pass);
$pass = md5($pass);

$query= "select * from global_acc 
		where racc = '$racc' 
		AND pass ='$pass'";

$cmd=mysqli_query($con,$query);
$row = mysqli_fetch_array($cmd);		

if($racc == $row[2] && $pass == $row[3])
{

 $_SESSION['racc'] = $racc;
 $_SESSION['pass'] = $pass;
$type = $_SESSION['type'] = $row[4];


header('location:user.php');
}

else
{
$result = "invalid login";	
}

}
if(empty($user))
{
$result = "fill the required field";	
}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<script type="text/javascript" src="js/jquery-2.2.0.min.js"></script>	
</head>
<body>
<div class="container">
<h1 class="col-sm-offset-4">login page</h1>
<form class="form-horizontal" method="post" action="login_md5.php">

<div class="form-group">

<!-- opposite style -->
<div class="col-sm-4">
<label class="label-control">user</label>
<input type="text" class="form-control" name="racc">
</div>	
</div>

<div class="form-group">
<div class="col-sm-4">
<label class="label-control">password</label>
<input type="password" class="form-control" name="pass">	
</div>
</div>

<div class="form-group">
<button type="submit" class="btn btn-success col-sm-offset-2" name="submit">submit</button>	
<?php echo $result; ?>
</div>

</form>
</div>
</body>
</html>