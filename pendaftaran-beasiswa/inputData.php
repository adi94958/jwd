<?php
    include 'koneksi.php';

    // Memeriksa koneksi
    if (!$conn) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    // Memeriksa apakah ada permintaan POST
    if (isset($_POST["submit"])) {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $noHp = $_POST["noHp"];
        $semester = $_POST["semester"];
        $ipk = $_POST["ipk"];
        $beasiswa = $_POST["beasiswa"];
        $id = 0;
        
        $direktori = 'berkas/'; // Direktori tujuan untuk menyimpan berkas yang diunggah
        $fileName = $_FILES['namaFile']['name']; // Mengambil nama asli berkas yang diunggah
        move_uploaded_file($_FILES['namaFile']['tmp_name'], $direktori.$fileName); // Memindahkan berkas yang diunggah dari tempat sementara ke direktori tujuan

        $sql = "INSERT INTO tpendaftar VALUES ('$id', '$nama', '$email', '$noHp', '$semester', '$ipk', '$beasiswa', '$fileName')"; // Menyimpan data ke database

        if ($conn->query($sql) === TRUE) { // Memeriksa apakah query sebelumnya telah dieksekusi dengan sukses
            $sql = "SELECT id FROM tpendaftar WHERE nama = '$nama'";
            $result = mysqli_query($conn, $sql); // Menjalankan query dan menyimpan hasilnya dalam variabel "result"
            $data = mysqli_fetch_assoc($result); // Mengambil data hasil query dan menyimpannya dalam bentuk array asosiatif "data"
            $id = $data['id']; // Mengambil nilai ID dari array asosiatif "data"
            header("Location: index.php?id=" . $id);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }

    // Menutup koneksi
    $conn->close();
?>
