<?php
$host = 'localhost';   // Host database (localhost untuk XAMPP)
$dbname = 'restoran';  // Nama database yang telah Anda buat
$username = 'root';     // Username MySQL (default untuk XAMPP)
$password = '';         // Password default XAMPP (kosong)

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
