<?php
include 'koneksi.php';
$id_kuliner = $_GET['id_kuliner'];
$result = mysqli_query($koneksi, "DELETE FROM kuliner WHERE id_kuliner='$id_kuliner'");
header ("Location:kuliner.php");
?>