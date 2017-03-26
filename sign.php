<?php


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	if(isset($_GET['str']))
{
	
$otp=$_GET['str'];
//$data=$_GET['data'];
$otp1=$_POST['otp'];
if($otp==$otp1)
{
	$name=$_GET['name'];
	$email=$_GET['email'];
	$pass=$_GET['pass'];
	$status=$_GET['status'];
 include_once('config.php');

	$sql = "INSERT INTO users (name,email,password,status) VALUES ('$name','$email','$pass','$status');";
	$qur = mysqli_query($conn,$sql);
	if($qur)
			{
				echo "signup completed successfully";
				die();
			}
	
}
else
{
	echo "varification failed";
}
// else
// {
// 	$json = array("status" => 0, "msg" => "Request method not accepted");
// }
}

}

//}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
<div>Please enter varification code:<input type="text" name="otp">
</div>
<div><button type="submit">verify</button>
</form></body>
</html>
















