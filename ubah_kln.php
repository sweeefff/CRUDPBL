<?php
include 'koneksi.php';
$id_kuliner = $_POST['id_kuliner'];
$nama_kuliner = $_POST['nama_kuliner'];
$jenis_kuliner = $_POST['jenis_kuliner'];
$deskripsi_kuliner = $_POST['deskripsi_kuliner'];
$input = mysqli_query($koneksi, "UPDATE kuliner SET nama_kuliner='$nama_kuliner', jenis_kuliner='$jenis_kuliner', deskripsi_kuliner='$deskripsi_kuliner' WHERE id_kuliner='$id_kuliner'") or die(mysqli_error($koneksi));
header ("Location:kuliner.php");
?>