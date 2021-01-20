<?php 
session_start();

if (!isset($_SESSION['login'])){
  header("location:login.php");
  exit;
}

$kd=$_GET['kd'];

include 'connect.php';

$sql = "delete from barang where kd='$kd'".;

$hasil = $koneksi->query($sql);
if (!$hasil) {
	echo "Hapus Data Gagal";
	echo "Error:" . $sql . "<br>" . $conn->error;
} else{
	echo "<br>";
	header("location:barang.php");
}
?>