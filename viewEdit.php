<?php

    session_start();
    if(!isset($_SESSION["login"])){
      header("Location: login.php");
    }
    
    include 'koneksi.php';

    $nrp = $_GET['nrp'];

    $query = "SELECT * FROM mahasiswa WHERE nrp='$nrp'";
    $result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>
<body>
<div class="container">
    <?php while($row = mysqli_fetch_assoc($result)) :?>
      <form action="actionEdit.php" method="POST" class="row g-3">
        <h1 class="mt-5">Edit Mahasiswa</h1>
        <div>
          <label for="nrp" class="form-label">NRP</label>
          <div class="col-sm-6">
            <input name="nrp" value="<?php echo $row['nrp'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="nama" class="form-label">Nama</label>
          <div class="col-sm-6">
            <input name="nama" value="<?php echo $row['nama'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="ttl" class="form-label">Tanggal Lahir</label>
          <div class="col-sm-6">
            <input name="ttl" value="<?php echo $row['ttl'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="jk" class="form-label">Jenis Kelamin</label>
          <div class="col-sm-6">
            <input name="jk" value="<?php echo $row['jk'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="prodi" class="form-label">Prodi</label>
          <div class="col-sm-6">
            <input name="prodi" value="<?php echo $row['prodi'] ?>" type="text" />
          </div>
        </div>
        <div>
          <label for="mail">Email</label>
          <div class="col-sm-6">
            <input name="email" value="<?php echo $row['email'] ?>" type="text" />
          </div>
        </div>
        <div>
          <button action="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>
      <?php endwhile; ?>
    </div>
</body>
</html>