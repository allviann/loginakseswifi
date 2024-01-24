<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fungsi validasi
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $role = isset($_POST['role']) ? htmlspecialchars($_POST['role']) : '';
    $interests = isset($_POST['interests']) ? $_POST['interests'] : array();
    $remember = isset($_POST['remember']) ? true : false;

    // Contoh validasi sederhana
    if ($username === 'admin' && $password === 'password') {
        // Simpan data dalam sesi
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['number'] = $number;
        $_SESSION['role'] = $role;
        $_SESSION['interests'] = $interests;
        $_SESSION['remember'] = $remember;

        // Redirect ke halaman sukses jika login berhasil
        header('Location: success.php');
        exit();
    } else {
        // Redirect ke halaman login dengan pesan error jika login gagal
        header('Location: index.php?error=1');
        exit();
    }
} else {
    // Redirect ke halaman login jika akses langsung ke process.php
    header('Location: index.php');
    exit();
}
?>
