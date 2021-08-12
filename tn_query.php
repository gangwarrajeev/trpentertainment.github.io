<?php
$conn=mysqli_connect("localhost","root","","trpentertainment_tn") or die("connection failed to database please check your db name");
$error='';
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$mob=$_POST['mobile'];
	$address=$_POST['address'];
	$product=$_POST['product'];
	// it is used to sentize the input
    $u_name =mysqli_real_escape_string($conn,$name);
    $u_mob =mysqli_real_escape_string($conn,$mob);
    $u_address =mysqli_real_escape_string($conn,$address);
    $product_name =mysqli_real_escape_string($conn,$product);

$sql="INSERT INTO tn(Name,Phone,City,Products) VALUES('{$u_name}','{$u_mob}','{$u_address}','{$product_name}')";
$result=mysqli_query($conn,$sql) or die("query failed!");
if ($result) {
	header('location:tn.php');
}

}


?>