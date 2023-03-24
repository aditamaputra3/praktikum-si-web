<?php

    session_start();
    if(!isset($_SESSION["login"])){
      header("Location: login.php");
    }

    include 'koneksi.php';
    $query = 'SELECT * FROM mahasiswa';
    $result = mysqli_query($koneksi, $query);

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
</head>
<body>
  <div class="container">
    <h1>Halaman Data</h1>
    <a href="index.html" class="btn btn-dark" role="button">Tambah Data</a>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>NRP</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Prodi</th>
                    <th>Email</th>
                    <th>Action</th>
</tr>
</thead>
<tbody>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['nrp'] ?> </td>
            <td><?php echo $row['nama'] ?> </td>
            <td><?php echo $row['ttl'] ?> </td>
            <td><?php echo $row['jk'] ?> </td>
            <td><?php echo $row['prodi'] ?> </td>
            <td><?php echo $row['email'] ?> </td>
    <td>
    <a href="viewEdit.php?nrp=<?php echo $row['nrp']; ?>" class="btn btn-info btn-sm" role="button">Edit</a>
    <a href="actionDelete.php?nrp=<?php echo $row['nrp']; ?>"
    onclick="return confirm('Data ini akan dihapus?')" role="button" class="btn btn-danger btn-sm">Delete</a>
    </td>   
</tr>
    <?php } ?>
    </tbody>
    </table><br>
    <a href="logout.php" class="btn btn-danger">Logot</a>
  </div>  
</body>
</html>