<?php 
session_start();

if (!isset($_SESSION['login'])){
  header("location:login.php");
  exit;
}
        include "connect.php";
            $id=$_POST['id'];
            $name=$_POST['name'];
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            $level=$_POST['level'];

            $sql = "UPDATE login SET name='$name', username='$username', password='$password', level='$level' WHERE id=$id";
        $hasil=mysqli_query($koneksi,$sql);

        if($hasil){
        header("location:customer.php");
        }else{
           echo "Data Gagal di Edit";
          echo "Error:" . $sql . "<br>" . $conn->error;
  }
 ?>