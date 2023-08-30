<?php
    $conn = mysqli_connect("localhost", "root", "", "dbBeasiswa");

    // Memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
?>