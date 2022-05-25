<?php
include ("admin/koneksi.inc.php");

if(isset($_POST ["submit"])) {
    $nama   = $_POST["nama"];
    $jkel   = $_POST["jkel"];
    $email  = $_POST["email"];
    $alamat = $_POST["alamat"];
    $kota   = $_POST["kota"];
    $pesan  = $_POST["pesan"];

    $sql    = "INSERT kontak SET nama='$nama',jkel='$jkel', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";

    $submit = mysqli_query($conn,$sql);
    header("Location : kontak.html");
}
?>