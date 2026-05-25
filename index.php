<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $result = "INSERT INTO tb_users (nama, password, email) VALUES ('$username', '$password', '$email')";
    $query = mysqli_query($koneksi, $result);
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
<div class="container">
  <p>Silahkan daftar dengan format di bawah ini.</p>
  <form method="POST" class="form">
    <div class="usn">
    <label>Username:</label>
    <input type="text" id="username" name="username" required>
    </div>
    
    <div class="pw">
    <label>Password:</label>
    <input type="password" id="password" name="password" required>
    </div>

    <div class="email">
    <label>Email:</label>
    <input type="email" id="email" name="email" required>
    </div>

    <div class="submit">
    <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>

</body>
</html>