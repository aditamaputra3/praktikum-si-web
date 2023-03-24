<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      <form action="actionInput.php" method="POST">
        <h1 class="mt-5">Form Input Mahasiswa</h1>
        <div>
          <label for="nrp" class="form-label">NRP</label>
          <div class="col-sm-6">
            <input name="nrp" type="text" />
          </div>
        </div>
        <div>
          <label for="nama" class="form-label">Nama</label>
          <div class="col-sm-6">
            <input name="nama" type="text" />
          </div>
        </div>
        <div>
          <label for="ttl" class="form-label">Tanggal Lahir</label>
          <div class="col-sm-6">
            <input name="ttl" type="text" />
          </div>
        </div>
        <div>
          <label for="jk" class="form-label">Jenis Kelamin</label>
          <div class="col-sm-6">
            <input name="jk" type="text" />
          </div>
        </div>
        <div>
          <label for="prodi" class="form-label">Prodi</label>
          <div class="col-sm-6">
            <input name="prodi" type="text" />
          </div>
        </div>
        <div>
          <label for="mail">Email</label>
          <div class="col-sm-6">
            <input name="email" type="text" />
          </div>
        </div>
        <div>
          <button action="submit" class="btn btn-dark">Submit</button>
          <a href="logout.php" role="button">ff</a>
        </div>
      </form>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
