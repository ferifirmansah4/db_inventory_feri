<?php 

$id_barang = $_GET['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];

include '../../config/koneksi.php';

$query = mysqli_query($conn, "UPDATE barang SET 
 nama_barang='$nama_barang',
 harga ='$harga' ,
 stok ='$stok'
WHERE id_barang='$id_barang'");

if($query){
    echo "<script>alert('edit barang berhasil cuy')</script>";
    echo "<script>window.location.href='index.php'</script>";
} else{
    echo "<script>alert('edit gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}