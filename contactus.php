<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- penghubung ke Font Awesome nih -->
    <!-- <script src="https://kit.fontawesome.com/d13c450b03.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="unity/fontawesome/css/all.min.css">

    <title>REPOSI-IBIK57</title>
  </head>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand font-weight-bold text-white" href="index.html">
          REPOSI-IBIK57
        </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
              data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> <!-- Button ini kan muncul ketika mengecilkan ukuran website kita -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto"> <!-- class ml-auto berfungsi untuk merapihkan menu agar tampil di sebelah kanan -->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contactus.php">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#informasi" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  LOGIN
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="loginsuperadmin.php">Login Super Admin</a>
                  <div class="dropdown-divider"></div> <!-- class ini untuk garis pemisah -->
                  <a class="dropdown-item" href="logindosen.php">Login Dosen</a>
              </li>
          <li>
            <!-- mt= margin top, ml=margin left -->
            <i class="fab fa-whatsapp ml-3 mt-2"></i>
            <i class="fab fa-facebook-square ml-3 mt-2"></i>
            <i class="fab fa-twitter ml-3 mt-2"></i>
            <i class="fab fa-instagram ml-3 mt-2"></i>
            <i class="fas fa-search ml-3 mt-2"></i>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br><br><br><br>

    <!--ini bagian card E-Books-->
    <center><h3><strong>Contact Us / Feedback Form</strong></h3></center>
    <br><br>
    <div class="container">
<form action="prosesKomen.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="recipient-name" class="col-form-label">Nama Lengkap :</label>
    <input type="text" class="form-control"  placeholder="Masukkan Nama Lengkap Anda" name="Nama" required="Kode wajib diisi" id="Nama" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="recipient-name" class="col-form-label">Email :</label>
    <input type="text" class="form-control"  placeholder="Masukkan Email" name="Email" required="Nama Penerbit wajib diisi" id="Email" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="recipient-name" class="col-form-label">Pesan :</label>
    <input type="text" class="form-control"  placeholder="Masukkan Pesan Anda" name="Komentar"  id="Komentar" autocomplete="off">
  </div>

  <!-- /.card-body -->
    <div class="card-footer">
      <button class="btn btn-warning" name="simpan"><b>Simpan Data</b></button>
      <span class="class="pull-right"">
        <a href="index.html" class="btn btn-primary"><b>Kembali</b></a>
      </span>

    </div>

</form>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
