<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../asset/css/style.css">
    <link rel="shortcut icon" href="../../../asset/img/logo.png" type="image/x-icon">
</head>
<body>
    <div class="login-box">
        <img src="../../../asset/img/logo.png" alt="logo">
        <h2>Masuk LibraryEdu</h2>
        <p>Masukkan email dan kata sandi untuk mengakses akun <b>LibraryEdu</b> anda</p>
        <hr>
        <form action="" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="example@mail.com">

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Min 8 character">

            <button type="submit" name="login">Masuk</button>
        </form>
        <br>
        <p>Belum memiliki akun? <a href="register.php">Daftar</a></p>
    </div>
</body>
</html>