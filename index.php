<?php
include "Mahasiswa.php";

// objek pertama (sesuai contoh di materi)
$mahasiswaTI = new Mahasiswa();
$mahasiswaTI->setData('A11.2000.00001', 'Fulan', 'Teknik Informatika');

echo "<pre>";
print_r($mahasiswaTI->getData());
echo "</pre>";

echo "<hr>";

// objek kedua
$mahasiswaSI = new Mahasiswa();
$mahasiswaSI->setData('A11.2000.00002', 'Budi', 'Sistem Informasi');

echo "<pre>";
print_r($mahasiswaSI->getData());
echo "</pre>";

echo "<hr>";

// objek ketiga
$mahasiswaMI = new Mahasiswa();
$mahasiswaMI->setData('A11.2000.00003', 'Siti', 'Manajemen Informatika');

echo "<pre>";
print_r($mahasiswaMI->getData());
echo "</pre>";

echo "<hr>";
echo "<h3>Menampilkan Data Mahasiswa</h3>";

// menggunakan method tampilkanData()
$mahasiswaTI->tampilkanData();
$mahasiswaSI->tampilkanData();
$mahasiswaMI->tampilkanData();
?>