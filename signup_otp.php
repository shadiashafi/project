<?php

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// Get data
	$name =$_POST['name'];
	$email =$_POST['email'];
	$password =$_POST['password'];
	$status = $_POST['status'];
	// $data=array('name'=>$name,'email'=>$email,'password'=>$password,'status'=>$status);
$to="shadia.shafi@gmail.com";

$subject = 'One time password for login';


$str = '';
for($i=4;$i>0;$i--){
    //$str = $str.chr(rand(97,122)); 
  $str = $str.rand (0,9);
   }

$txt="One time password for login=$str";
//$headers="From:"
 
if(mail($to,$subject,$txt)){
	echo "send";
}

else 
{

   header("Location:sign.php?str=$str&name=$name&pass=$password&status=$status&email=$email");
}
}