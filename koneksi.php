<?php 
$koneksi = mysqli_connect('localhost', 'root', '', 'portofolio');

if (!$koneksi) {
    die('koneksi gagal: ' . mysqlli_connect_error());
}
?>