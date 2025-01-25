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
    $totalbayar = $_POST['totalbayar'];

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

