<?php
//koneksi ke database MySQL
$koneksi = mysqli_connect("localhost","root","","repojursi");

//cek jika koneksi ke mysql gagal :
if (mysqli_connect_error()) {
  // code...
  echo "Gagal melakukan koneksi ke MySQL.." , mysqli_connect_error();
}

?>
