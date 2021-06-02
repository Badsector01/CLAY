<?php
include 'koneksi.php';
    // jika ada tombol simpan (ditekan tombol simpan)
    if (isset($_POST["simpan"]))
    {
      $Nama = $_POST["Nama"];
      $Email = $_POST["Email"];
      $Komentar = $_POST["Komentar"];

      $koneksi->query("INSERT INTO buku_tamu (Nama,Email,Komentar)
        VALUES ('$Nama','$Email','$Komentar')");
      echo "<script>alert('Komentar dan Saran anda telah kami terima, Terimakasih ^_^');</script>";
      echo "<script>location='index.html';</script>";
    }

?>
