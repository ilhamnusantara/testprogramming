<?php
include "koneksi.php"; //memanggil file koneksi

//baca file json dari url web
$url = "https://gist.githubusercontent.com/FastPrintProg3/dec91c65f573d09a6e7836c65ae54e73/raw";
$json = file_get_contents($url);

$array = json_decode($json,true);
foreach($array as $row)
{
    $sql = "INSERT INTO produks(id_produk, nama_produk, harga, kategori, status) VALUES('".$row["id_produk"]."','".$row["nama_produk"]."','".$row["harga"]."','".$row["kategori"]."','".$row["status"]."')";
    $result = mysqli_query($db, $sql);
}
echo "Import data sukses !!";


?>