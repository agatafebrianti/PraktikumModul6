<!DOCTYPE html>
<html>
<head>
    <title>Latihan Kondisi PHP - Input Nilai</title>
</head>
<body>
    <h1>Cek Nilai Kamu</h1>

    <form method="POST" action="">
        <label>Masukkan Nilai Anda:</label>
        <input type="number" name="nilai" min="0" max="100" required>
        <button type="submit">Cek</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        echo "<p>Nilai Anda: $nilai</p>";

        // Kategori nilai
        if ($nilai > 90) {
            echo "<p>Kategori: Sangat Baik</p>";
        } elseif ($nilai > 80) {
            echo "<p>Kategori: Sangat Baik</p>";
        } elseif ($nilai > 70) {
            echo "<p>Kategori: Baik</p>";
        } else {
            echo "<p>Kategori: Cukup</p>";
        }

        // Status kelulusan
        if ($nilai >= 75) {
            echo "<p style='color:green;'>Selamat, Anda Lulus!</p>";
        } else {
            echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>";
        }
    }
    ?>
</body>
</html>
