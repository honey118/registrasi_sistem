<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $eksekusi = "INSERT INTO tb_users (nama, password, email) VALUES ('$username', '$password', '$email')";
    $query = mysqli_query($koneksi, $eksekusi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Selamat Datang!</h1>
  <form method="POST">
    <div>
    <label>Username:</label>
    <input type="text" id="username" name="username" required>
    </div>
    
    <div>
    <label>Password:</label>
    <input type="password" id="password" name="password" required>
    </div>

    <div>
    <label>Email:</label>
    <input type="email" id="email" name="email" required>
    </div>

    <div>
    <input type="submit" value="Login" name="submit">
    </div>
  </form>
</body>
</html>