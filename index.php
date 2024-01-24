<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login WiFi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form action="process.php" method="post">
        <h2>Login Akses WiFi</h2>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error-message">Login Gagal. Silakan coba lagi.</p>';
        }
        ?>
        <label for="username">Namamu:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="number">Nomor telepon:</label>
        <input type="number" id="number" name="number" required>

        <label>Sebagai:</label>
        <label for="role-admin">
            <input type="radio" id="role-admin" name="role" value="admin" required> Guru
        </label>
        <label for="role-user">
            <input type="radio" id="role-user" name="role" value="user" required> Murid
        </label>

        <label>Akses Wifi Ini Digunakan Untuk:</label>
        <label for="interest-coding">
            <input type="checkbox" id="interest-coding" name="interests[]" value="coding"> Keperluan Belajar
        </label>
        <label for="interest-design">
            <input type="checkbox" id="interest-design" name="interests[]" value="design"> Hanya Main Game
        </label>
        
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
