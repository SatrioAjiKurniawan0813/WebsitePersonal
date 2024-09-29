<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Global Style */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
        }

        .nav-link {
            font-size: 18px;
        }

        /* Profile Section */
        #about {
            background: linear-gradient(135deg, #007bff, #00c6ff);
            color: white;
            padding: 50px 0;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
        }

        #about h2 {
            font-size: 36px;
            font-weight: bold;
        }

        #about p {
            font-size: 18px;
            margin-top: 15px;
        }

        /* Education & Experience Section */
        section {
            padding: 50px 0;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img {
            height: 200px;
            object-fit: cover;
            border-bottom: 5px solid #007bff;
        }

        .card-title {
            font-size: 22px;
            font-weight: bold;
            color: #007bff;
        }

        .card-text {
            font-size: 16px;
            color: #555;
        }

        /* Footer */
        footer {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
        }

        footer p {
            margin: 0;
            font-size: 16px;
        }

        /* Media Queries */
        @media (max-width: 768px) {
            .profile-img {
                width: 120px;
                height: 120px;
            }

            #about h2 {
                font-size: 28px;
            }

            #about p {
                font-size: 16px;
            }

            .card-title {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#about">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#education">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#experience">Pengalaman</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile Section -->
    <section id="about" class="py-5 bg-light">
        <div class="container text-center">
            <img src="WhatsApp Image 2024-09-19 at 12.03.43_75f22e69.jpg" alt="Foto Profil" class="profile-img mb-4">
            <h2 class="mb-3">Satrio Aji Kurniawan</h2>
            <p>Deskripsi singkat tentang diri saya,saya Satrio Aji Kurniawan Seorang Pelajar di SMKN 1 Bawang Masuk di Jurusan</p>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Pendidikan</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="sd-image.jpg" class="3.webp" alt="Sekolah Dasar">
                        <div class="card-body">
                            <h5 class="card-title">Sekolah Dasar</h5>
                            <p class="card-text">SDN 3 Kaliurip<br>Tahun Masuk 2014 - Tahun Keluar 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="6994498-mtsn-2-banjarnegara-banjarnegara-jawa-tengah.jpg" class="card-img-top card-img" alt="Madrasah Tsanawiyah">
                        <div class="card-body">
                            <h5 class="card-title">Madrasah Tsanawiyah</h5>
                            <p class="card-text">MTS Negeri 2 Banjarnegara<br>Tahun Masuk 2021 - Tahun Keluar  2023</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="IMG_7196-e1587718898743.jpg" class="card-img-top card-img" alt="Sekolah Menengah Kejuruan">
                        <div class="card-body">
                            <p class="card-text">
                                Nama: SMKN 1 Bawang<br>
                                Tahun Masuk 2023 - Tahun Keluar 2026<br>
                                <a href="https://smkn1bawang.sch.id" target="_blank">Kunjungi Website</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
   <!-- Experience Section -->
<section id="experience" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Pengalaman</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <!-- Tambahkan foto untuk Pekerjaan 1 -->
                    <img src="IMG-20240502-WA0246.jpg" class="card-img-top card-img" alt="Pekerjaan 1">
                    <div class="card-body">
                        <h5 class="card-title">Pengalaman 1</h5>
                        <p class="card-text">Saya pernah Menjadi Seksi Acara Di Karawitan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <!-- Tambahkan foto untuk Pekerjaan 2 -->
                    <img src="IMG-20240825-WA0000.jpg" class="card-img-top card-img" alt="Pekerjaan 2">
                    <div class="card-body">
                        <h5 class="card-title">Pekerjaan 2</h5>
                        <p class="card-text">Saya Melakukan Pakeliran Padat Wayang Kulit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <footer class="py-4 bg-dark text-white text-center">
        <p>&copy; 2024 Nama Anda. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript tambahan dapat dimasukkan di sini
    </script>
</body>
</html>