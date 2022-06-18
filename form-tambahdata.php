<?php
// membutuhkan pemanggilan akses koneksi (mysql)
require 'koneksi.php';

// menjalankan sessions
session_start();
 
// check apakah session email sudah ada atau belum.
// jika belum maka akan diredirect ke halaman index (login)
if( empty($_SESSION['uname']) ){
    header('Location: login.html');
}
 
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Tambah Data</title>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #212529;">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: white;">LATIHAN API - WEB COEDOTZ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <form class="d-flex">
      <a class="nav-link" href="index.php" style="color: white;">Kembali</a>
    </form>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="container">
        <h2 class="alert alert-primary text-center mt-5">Form Tambah Data</h2>
        <form action="tambahdata.php" method="POST" enctype="multipart/form-data"> 
        <div class="form-group">
            <div class="row">
              <label for="basic-url" class="form-label">Gambar</label>
              <div class="input-group mb-3">
              <input type="file" name="file" required>
              </div>

              <div class="form-group">
                <label">Judul</label>
                  <input type="text" name="judul" class="form-control" required>
              </div>

              <div class="form-group">
                <label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="4" required></textarea>
              </div>

              <button type="submit" name="tambah" class="btn btn-primary mt-3">Simpan</button>

            </div>
        </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>  