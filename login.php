<?php

require 'actionLogin.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>
    <div class="container">
        <h1>Halaman Login</h1>
        <?php if (isset($error)) : ?>

            <p style="color:red; font-style:italic;">username atau password salah</p>

        <?php endif; ?>

        <form action="actionLogin.php" method="post">
            <ul>
                <div>
                    <label for="username">Username</label>
                    <div>
                        <input type="text" id="username" name="username">
                    </div>
                </div>
                <div>
                    <input type="password" id="password" name="password">
                </div>
                <div>
                    <button action="submit" name="login">Login</button>
                </div>
                <div style="margin-top: 20px;">
                    <a href="register.php"><button type="button">Register</button>
            </div>
            </ul>
        </form>
    </div>
</body>

</html>