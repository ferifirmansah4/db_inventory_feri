<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_inventory_feri');

if(!$conn){
    die("Koneksi Gagal". mysqli_connect_error());
}