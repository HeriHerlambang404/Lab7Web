<!DOCTYPE html>
<html>
<head>
    <title>Form Data dan Gaji</title>
</head>
<body>

<h2>Form Input Data dan Gaji</h2>

<form method="POST" action="">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" required><br><br>

    <label>Pekerjaan:</label><br>
    <select name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Programmer">Programmer</option>
        <option value="Desainer">Desainer</option>
        <option value="Guru">Guru</option>
        <option value="Dokter">Dokter</option>
        <option value="Petani">Petani</option>
    </select><br><br>

    <input type="submit" name="submit" value="Tampilkan">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    $tanggal_lahir = new DateTime($tgl_lahir);
    $sekarang = new DateTime();
    $umur = $sekarang->diff($tanggal_lahir)->y;

    switch ($pekerjaan) {
        case "Programmer":
            $gaji = 8000000;
            break;
        case "Desainer":
            $gaji = 7000000;
            break;
        case "Guru":
            $gaji = 5000000;
            break;
        case "Dokter":
            $gaji = 12000000;
            break;
        case "Petani":
            $gaji = 4000000;
            break;
        default:
            $gaji = 0;
            break;
    }

    echo "<hr>";
    echo "<h3>Hasil Output:</h3>";
    echo "Nama: $nama <br>";
    echo "Tanggal Lahir: " . date('d-m-Y', strtotime($tgl_lahir)) . "<br>";
    echo "Umur: $umur tahun<br>";
    echo "Pekerjaan: $pekerjaan<br>";
    echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . "<br>";
}
?>

</body>
</html>
