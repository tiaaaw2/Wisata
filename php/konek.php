User
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pariwisata";

$sambungan = mysqli_connect($host,$user,$pass,$db);
if (!$sambungan){
    die("proses koneksi gagal:".mysqli_connect_error());
}

if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $telp  = $_POST['telp'];
    $tgl  = date('Y-m-d', strtotime($_POST['tanggal']));
    $hari = $_POST['hari'];
    $peserta = $_POST['peserta'];
    $totalakomodasi = $_POST['totalakomodasi'];
    $totalbayar = $_POST['totalbayar'];<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pariwisata";

$sambungan = mysqli_connect($host, $user, $pass, $db);
if (!$sambungan) {
    die("proses koneksi gagal: " . mysqli_connect_error());
}

if (isset($_POST['nama'])) {
    $nama  = mysqli_real_escape_string($sambungan, $_POST['nama']);
    $telp  = mysqli_real_escape_string($sambungan, $_POST['telp']);
    $tgl   = date('Y-m-d', strtotime($_POST['tanggal']));
    $hari  = mysqli_real_escape_string($sambungan, $_POST['hari']);
    $peserta = mysqli_real_escape_string($sambungan, $_POST['peserta']);
    $totalakomodasi = mysqli_real_escape_string($sambungan, $_POST['totalakomodasi']);
    $totalbayar = mysqli_real_escape_string($sambungan, $_POST['totalbayar']);

    // cek apakah ada akomodasi
    $akomodasi_string = "";
    if (!empty($_POST['akomodasi']) && is_array($_POST['akomodasi'])) {
        $akomodasi = $_POST['akomodasi'];
        $akomodasi_string = implode(",", $akomodasi);
    }

    $sql = "INSERT INTO pemesanan(nama, telp, tanggal, hari, peserta, akomodasi, totalakomodasi, totalbayar)
            VALUES ('$nama', '$telp', '$tgl', '$hari', '$peserta', '$akomodasi_string', '$totalakomodasi', '$totalbayar')";

    if ($sambungan->query($sql) === TRUE) {
        echo "berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $sambungan->error;
    }
}

// Menutup koneksi
$sambungan->close();
?>


    $akomodasi = $_POST['akomodasi'];
    $akomodasi_string = "";
    foreach($akomodasi as $row){
        $akomodasi_string .= $row . ",";
    }
    


    $sql = "INSERT INTO pemesanan(nama, telp, tanggal, hari, peserta, akomodasi, totalakomodasi, totalbayar)
    VALUES ('$nama', '$telp', '$tgl', '$hari', '$peserta', '$akomodasi_string', '$totalakomodasi', '$totalbayar')";

    if ($sambungan->query($sql) === TRUE) {
        echo "berhasil";
    } else {
        echo "Error: " . $sql . "<br>" . $sambungan->error;
    }
}

// Menutup koneksi
$sambungan->close();
?>

<!-- // $tgl  = $_POST['tanggal']; -->

