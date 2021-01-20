<?php 
session_start();

if (!isset($_SESSION['login'])){
  header("location:login.php");
  exit;
}

$id=$_GET['id'];

include 'connect.php';

$sql = "delete from login where id=".$id;

$hasil = $koneksi->query($sql);
if (!$hasil) {
	echo "Hapus Data Gagal";
	echo "Error:" . $sql . "<br>" . $conn->error;
} else{
	echo "<br>";
	header("location:customer.php");
}
?>