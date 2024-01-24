<?php
session_start();

// Periksa apakah ada sesi username yang tersimpan
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Jika tidak ada sesi, redirect ke halaman login
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sukses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login Sukses!</h2>
    <p>Selamat datang, <?php echo htmlspecialchars($username); ?>!</p>
</div>

</body>
</html>
