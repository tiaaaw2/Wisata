<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pariwisata";

// Membuat koneksi
$sambungan = mysqli_connect($host, $user, $pass, $db);
if (!$sambungan) {
    die("Proses koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['nama'])) {
    // Amankan input
    $nama  = mysqli_real_escape_string($sambungan, $_POST['nama']);
    $telp  = mysqli_real_escape_string($sambungan, $_POST['telp']);
    $tgl   = date('Y-m-d', strtotime($_POST['tanggal']));
    $hari  = mysqli_real_escape_string($sambungan, $_POST['hari']);
    $peserta = (int) $_POST['peserta'];
    $totalakomodasi = (float) $_POST['totalakomodasi'];
    $totalbayar = (float) $_POST['totalbayar'];

    // Cek apakah ada akomodasi
    $akomodasi_string = "";
    if (!empty($_POST['akomodasi']) && is_array($_POST['akomodasi'])) {
        $akomodasi = $_POST['akomodasi'];
        $akomodasi_string = implode(",", $akomodasi);
    }

    // Query insert
    $sql = "INSERT INTO pemesanan(nama, telp, tanggal, hari, peserta, akomodasi, totalakomodasi, totalbayar)
            VALUES ('$nama', '$telp', '$tgl', '$hari', '$peserta', '$akomodasi_string', '$totalakomodasi', '$totalbayar')";

    if (mysqli_query($sambungan, $sql)) {
        echo "✅ Data berhasil disimpan";
    } else {
        echo "❌ Error: " . mysqli_error($sambungan);
    }
}

// Tutup koneksi
mysqli_close($sambungan);
?>
