<?php
include 'koneksi.php';
$id_kuliner = $_POST['id_kuliner'];
$nama_kuliner = $_POST['nama_kuliner'];
$jenis_kuliner = $_POST['jenis_kuliner'];
$deskripsi_kuliner = $_POST['deskripsi_kuliner'];
$input = mysqli_query($koneksi, "INSERT INTO kuliner (id_kuliner, nama_kuliner, jenis_kuliner, deskripsi_kuliner) VALUES('$id_kuliner', '$nama_kuliner', '$jenis_kuliner', '$deskripsi_kuliner')") or die(mysqli_error($koneksi));

if($input){
    echo "<script>
        alert('Data Berhasil Disimpan');
        window.location.href = 'kuliner.php';
    </script>";
} else {
    echo "<script>
        alert('Gagal Menyimpan Data');
        window.location.href = 'kuliner.php';
    </script>";
}
?>