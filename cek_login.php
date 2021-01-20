<?php
session_start();

// menghubungkan php dengan koneksi database
include 'connect.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * FROM `login` where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek ===1) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['username'] = $username;
		
		$_SESSION['level'] = $data['level'];
		// alihkan ke halaman dashboard admin
		header("location:index.php");



		// cek jika user login sebagai pegawai
	} 
	 else if ($data['level'] == "suplayer") {
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $data['level'];
		
		//$_SESSION['level'] = "suplayer";
		// alihkan ke halaman dashboard pegawai
		header("location:index.php");

		// cek jika user login sebagai pengurus
	} 
	else if ($data['level'] == "customer") {
		// buat session login dan username
		$_SESSION['login'] = true;
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nama'];
		$_SESSION['level'] = "customer";
		// alihkan ke halaman dashboard pengurus
		header("location:index.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}
