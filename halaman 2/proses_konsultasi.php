<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "konsultasi_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['name'];
$usia = $_POST['age'];
$jenis_kelamin = $_POST['gender'];
$berat_badan = $_POST['weight'];
$tinggi_badan = $_POST['height'];
$aktivitas = $_POST['activity'];
$tujuan = $_POST['goal'];
$keluhan = $_POST['additional'];

// Query untuk menyimpan data
$sql = "INSERT INTO konsultasi (nama, usia, jenis_kelamin, berat_badan, tinggi_badan, aktivitas, tujuan, keluhan)
VALUES ('$nama', '$usia', '$jenis_kelamin', '$berat_badan', '$tinggi_badan', '$aktivitas', '$tujuan', '$keluhan')";

if ($conn->query($sql) === TRUE) {
    echo "Data konsultasi berhasil disimpan!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
