<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="#" />
    <title>Dashboard</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data.html">Data Akun</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 g-4  my-5" style="text-align: center">
        <div class="col">
          <div class="card">
            <div class="card-header">Nama</div>
            <div class="card-body">
              <p class="card-text">Prinafsika</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">NPM</div>
            <div class="card-body">
              <p class="card-text">21081010278</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-header">Mata kuliah</div>
            <div class="card-body">
              <p class="card-text">Pemrograman Web</p>
            </div>
          </div>
        </div>
        <div class="col">
            <div class="card">
              <div class="card-header">Jurusan</div>
              <div class="card-body">
                <p class="card-text">Informatika</p>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>
