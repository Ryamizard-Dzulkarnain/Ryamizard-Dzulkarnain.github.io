<?php
include 'connect.php';
if(isset($_POST['spn'])){
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$level=$_POST['level'];

	$sql = "INSERT INTO login VALUES ('id', '$name', '$username', '$password','$level')";
	if ($koneksi->query($sql) === TRUE) {
		header("location:customer.php");
	}else{
		echo "Error:" . $sql . "<br>" . $koneksi->error;
	}
	
}
?>