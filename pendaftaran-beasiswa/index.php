<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Beasiswa</title>
    <link href="bootstrap-5.3.0-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Pendaftaran Beasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="card">
            <div class="card-header btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary active" id="btn-section1" data-target="#content1">Pilihan Beasiswa</button>
                <button type="button" class="btn btn-primary" id="btn-section2" data-target="#content2">Daftar</button>
                <button type="button" class="btn btn-primary" id="btn-section3" data-target="#content3" disabled>Hasil</button>
            </div>
            <div class="card-body">
                <div class="col-md-12 mt-3">
                    <section id="section1" class="content">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Beasiswa BCA Finance</h5>
                                <p class="card-text">Beasiswa pertama yang bisa kamu coba adalah Beasiswa BCA Finance. BCA sebagai salah satu bank swasta di Indonesia memberikan kesempatan kepada mahasiswa/mahasiswi berprestasi yang sedang menempuh pendidikan di jenjang Sarjana (S1) semua jurusan di Perguruan Tinggi Negeri ataupun Perguruan Tinggi Swasta. Beasiswa BCA Finance yang diberikan berlaku selama mahasiswa menempuh pendidikan dalam rentang waktu normal yaitu 8 semester.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Beasiswa Bidikmisi</h5>
                                <p class="card-text">Selanjutnya adalah beasiswa Bidikmisi. Jenis beasiswa ini merupakan bantuan biaya pendidikan bagi calon mahasiswa yang tidak mampu secara ekonomi dan memiliki potensi akademik baik untuk menempuh pendidikan di perguruan tinggi pada program studi unggulan sampai lulus tepat waktu. Beasiswa Bidikmisi diberikan sejak mahasiswa ditetapkan sebagai penerima Bidikmisi di perguruan tinggi.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Beasiswa KIP Kuliah</h5>
                                <p class="card-text">Ada lagi nih kawan, beasiswa KIP kuliah yang juga bisa kamu manfaatkan ketika kamu ingin masuk ke perguruan tinggi. Program KIP-K atau Program Kartu Indonesia Pintar Kuliah merupakan program bantuan biaya pendidikan dari Pemerintah melalui Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemdikbudristek) yang bekerjasama dengan berbagai perguruan tinggi baik negeri maupun swasta.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Beasiswa Sampoerna Foundation</h5>
                                <p class="card-text">Beasiswa Sampoerna Foundation dikhususkan untuk pelajar dan mahasiswa berkewarganegaraan Indonesia dibuktikan oleh Kartu Tanda Penduduk, Kartu Keluarga dan dokumen lainnya. Yayasan Sampoerna menggelontorkan dana yang cukup besar untuk menjalankan program tersebut mulai tahun 2001.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Djarum Beasiswa Plus</h5>
                                <p class="card-text">Lanjut kita bergeser ke jenis beasiswa selanjutnya yaitu Djarum Beasiswa Plus. Beasiswa ini cukup populer di Indonesia di mana targetnya adalah mahasiswa dengan prestasi tinggi di Indonesia. Biasanya, penerima beasiswa ini memiliki nama atau sebutan sebagai Beswan Djarum.</p>
                            </div>
                        </div>
                    </section>
                    <section id="section2" class="content" style="display: none;">
                        <div class="head-form text-center">
                            <h2>Daftar Beasiswa</h2>
                        </div>
                        <div class="card" style="width: 100%;">
                            <div class=" card-header text-start">
                                <h5>Registrasi Beasiswa</h5>
                            </div>
                            <div class="card-body">
                                <form action="inputData.php" method="post" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="inputNama" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="inputNama" required>
                                    </div>  
                                    <div class="mb-3">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="inputEmail" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputNoHp" class="form-label">Nomor HP</label>
                                        <input type="number" name="noHp" class="form-control" id="inputNoHp" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputSemester" class="form-label">Semester saat ini</label>
                                        <select class="form-select" name="semester" aria-label="Default select example" id="inputSemester" required>
                                            <option value="0" selected disabled>--Pilih Semester--</option>
                                            <option value="1">Semester 1</option>
                                            <option value="2">Semester 2</option>
                                            <option value="3">Semester 3</option>
                                            <option value="4">Semester 4</option>
                                            <option value="5">Semester 5</option>
                                            <option value="6">Semester 6</option>
                                            <option value="7">Semester 7</option>
                                            <option value="8">Semester 8</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputIpk-disabled" class="form-label">IPK Terakhir</label>
                                        <input type="text" name="ipk-disabled" class="form-control" id="inputIpk-disabled" disabled>
                                        <input type="hidden" name="ipk" class="form-control" id="inputIpk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputBeasiswa" class="form-label">Pilihan Beasiswa</label>
                                        <select class="form-select" name="beasiswa" aria-label="Default select example" id="inputBeasiswa" required disabled>
                                            <option selected disabled>--Pilih Beasiswa--</option>
                                            <option value="Beasiswa BCA Finance">Beasiswa BCA Finance</option>
                                            <option value="Beasiswa Bidikmisi">Beasiswa Bidikmisi</option>
                                            <option value="Beasiswa KIP Kuliah">Beasiswa KIP Kuliah</option>
                                            <option value="Beasiswa Sampoerna Foundation">Beasiswa Sampoerna Foundation</option>
                                            <option value="Djarum Beasiswa Plus">Djarum Beasiswa Plus</option>
                                        </select>
                                    </div>
                                    <div class="mb-5">
                                        <label for="inputFile" class="form-label">Upload Berkas Syarat</label>
                                        <input class="form-control" name="namaFile" type="file" id="inputFile" required disabled>
                                    </div>
                                    <div class="col-md-12 mb-3 btn-toolbar justify-content-around">
                                        <button type="submit" name="submit" class="btn btn-primary" id="daftar" disabled>Daftar</button>
                                        <button type="reset" name="batal" class="btn btn-danger" id="batal" data-target="index.php">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                    <section id="section3" class="content" style="display: none;">
                        <?php
                            include 'koneksi.php';

                            if (isset($_GET['id']) && is_numeric($_GET['id'])) { // Memeriksa apakah parameter "id" telah diset dalam URL dan apakah nilainya numerik
                                echo"<script>";
                                echo"const section1 = document.getElementById('section1');";
                                echo"const section2 = document.getElementById('section2');";
                                echo"const section3 = document.getElementById('section3');";
                                echo"const nextsection1 = document.getElementById('btn-section1');";
                                echo"const nextsection2 = document.getElementById('btn-section2');";
                                echo"const nextsection3 = document.getElementById('btn-section3');";
                                echo"section3.removeAttribute('disabled');";
                                echo"section1.style.display = 'none';";
                                echo"section2.style.display = 'none';";
                                echo"section3.style.display = 'block';";
                                echo"nextsection1.classList.remove('active');";
                                echo"nextsection2.classList.remove('active');";
                                echo"nextsection3.classList.add('active');";
                                echo"</script>";
                                $id = $_GET['id']; //Query untuk mendapatkan data dengan ID yang diberikan
                                $sql = "SELECT id, nama, email, nohp, semester, ipk, beasiswa, files FROM tpendaftar WHERE id = $id";
                                $result = $conn->query($sql); // Menjalankan query SQL dan menyimpan hasilnya dalam variabel "result"

                                if ($result->num_rows == 1) { // Memeriksa apakah hasil query memiliki tepat 1 baris
                                    $row = $result->fetch_assoc(); // Mengambil satu baris data dari hasil query dan menyimpannya dalam array asosiatif $row
                                    ?>
                                    <div class="card" style="width: 100%;">
                                        <div class=" card-header text-center">
                                            <h2>Data Pendaftar</h2>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Nama</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["nama"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Nomor HP</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["nohp"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Semester</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["semester"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">IPK Terakhir</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["ipk"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Pilihan Beasiswa</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["beasiswa"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Berkas</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["files"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Pilihan Beasiswa</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <?php echo $row["beasiswa"]; ?>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <label class="form-label">Status Pengajuan</label>
                                                        </div>
                                                        <div class="col-9">
                                                            : <button class="btn btn-warning" style="color: white;" disabled>Belum di verifikasi</button>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            $conn->close();
                        ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="style-js.js"></script>
</body>
</html>