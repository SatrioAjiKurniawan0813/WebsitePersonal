<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Jersey Online</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Toko Jersey</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#jersey">Jersey</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center">Selamat Datang di Toko Jersey Online</h1>
        <p class="text-center">Temukan jersey terbaik kami di bawah ini!</p>

        <div class="row" id="jersey">
            <?php
            // Sertakan koneksi database
            include 'db.php';

            // Ambil data jersey
            $sql = "SELECT * FROM jerseys";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-md-4">';
                    echo '<div class="card mb-4">';
                    echo '<img src="' . $row["image"] . '" class="card-img-top" alt="' . $row["name"] . '">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $row["name"] . '</h5>';
                    echo '<p class="card-text">' . $row["description"] . '</p>';
                    echo '<p class="card-text"><strong>Rp ' . number_format($row["price"], 2, ',', '.') . '</strong></p>';
                    echo '<button class="btn btn-primary" onclick="beli(\'' . $row["name"] . '\')">Beli Sekarang</button>';
                    echo '</div></div></div>';
                }
            } else {
                echo '<p>Tidak ada jersey tersedia.</p>';
            }

            // Tutup koneksi
            $conn->close();
            ?>
        </div>
    </div>

    <footer class="bg-light text-center text-lg-start mt-4">
        <div class="text-center p-3">
            &copy; 2024 Toko Jersey. Semua hak dilindungi.
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function beli(namaProduk) {
            alert(namaProduk + ' telah ditambahkan ke keranjang!');
        }
    </script>
</body>
</html>


