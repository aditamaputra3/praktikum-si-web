<?php
require 'actionRegister.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
            alert('User baru berhasil ditambahkan);
            </script>";

        header("Location:login.php");
    } else {
        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <h1>Halaman Register</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Password:</label>
                <input type="password2" name="password2" id="password2">
            </li>
            <li>
                <label for="password2">Alamat:</label>
                <textarea name="alamat" rows="5" cols="40"></textarea>
            </li>
            <li>
                <label for="password2">Tingkat Pendidikan:</label>
                <input type="radio" value="S1" name="tingkat">S1
                <input type="radio" value="S2" name="tingkat">S2
            </li>
            <label for="cars">Fakultas</label>
            <select name="fakultas" id="fakultas">
                <option value="Fakultas Teknologi Industri (FTI)">Fakultas Teknologi Industri</option>
                <option value="Fakultas Arsitektur dan Desain (FAD)">Fakultas Arsitektur dan Desain</option>
                <option value="Fakultas Teknik Sipil dan Perencanaan (FTSP)">Fakultas Teknik Sipil dan Perencanaan</option>
            </select>
            <li>
                <button type="submit" name="register">Register</button>
            </li>
        </ul>
    </form>
</body>

</html>