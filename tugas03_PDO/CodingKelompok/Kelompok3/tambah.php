<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama = $_POST['nama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];
$nama_foto = rand() . '.png';
$lokasi = $_FILES['foto']['tmp_name'];
$upload = move_uploaded_file($lokasi, "images/" . $nama_foto);

$query = "INSERT INTO user(username,password,nama,ttl,alamat,email,foto) VALUES ('$username', '$password', '$nama', '$ttl', '$alamat', '$email', '$nama_foto')";
try {
    $simpan = $db->prepare($query);
    $simpan->execute();

    header("location: index.php");
} catch (PDOException $th) {
    echo $th->getMessage();
}
