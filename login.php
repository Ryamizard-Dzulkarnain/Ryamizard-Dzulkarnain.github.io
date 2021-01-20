<!DOCTYPE html>
<html>
<head>
 <title>LOGIN MULTIUSER</title>
 <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<br><br>
 <h3><b>FORM LOGIN <br/> Penjualan & Pembelian Barang</b></h3>


 <div class="panel_login">
  <p class="tulisan_atas">Silahkan Login</p>

  <form action="cek_login.php" method="post">
   <label>Username</label>
   <input type="text" name="username" class="form_login" placeholder="Username" required="required">

   <label>Password</label>
   <input type="password" name="password" class="form_login" placeholder="Password" required="required">

   <input type="submit" class="tombol_login" value="LOGIN">
</div>
<div><p><center><b>Copyright &copy; 2021-<i>Ryamizard Dzulkarnain</i></b></center></p></div>
                <?php
                if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                echo "<div class='alert'>Username dan Password Salah !</div>";
                  }
                 }
                 ?>
   <br/>
   <br/>
   
  </form>
  
 </div>


</body>
</html>
