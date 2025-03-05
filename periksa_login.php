<?php
// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    if ($username === "admin" && $password === "admin123") {
        echo "<script>window.location.href='admin/index.html';</script>";
        exit();
    } else {
        // Redirect kembali ke halaman login dengan pesan error
        header("Location: index.html?error=1");
        exit();
    }
}
