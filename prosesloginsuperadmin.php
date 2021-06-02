<?php

session_start();
include 'koneksi.php'; ?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Super Admin | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php
error_reporting(0);
             if (isset($_POST['loginsuperadmin']))
             {
              $ambil = $koneksi->query("SELECT *  FROM superadmin WHERE username='$_POST[username]'
                AND password = '$_POST[password]'");
              $cek_username = $ambil->num_rows;
              if ($cek_username==1)
             {
              $_SESSION['superadmin']=$ambil->fetch_assoc();
              echo "<div class='alert alert-info'>Anda Berhasil Login</div>";
              echo "<meta http-equiv='refresh' content='1;url=backendadmin/repojursi/index.php'>";
             }
             else
             {
              echo "<div class='alert alert-danger'>Anda Gagal Login</div>";
              echo "<meta http-equiv='refresh' content='1;url=loginsuperadmin.php'>";
             }
             }
             ?>
