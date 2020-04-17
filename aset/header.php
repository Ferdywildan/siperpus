<?php
session_start();

if(!(isset($_SESSION['id_petugas'])))
{
    header("Location: http://localhost/siperpus/login/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">

    <title>SiPERPUS</title>
</head>
<body>

   

   
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2"></i>SiPERPUS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/siperpus/index.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/siperpus/buku/index.php">Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/siperpus/anggota/index.php">Anggota</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/siperpus/transaksi/index.php">Peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/siperpus/login/logout.php">Logout</a></a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
