<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container" class="mb-3">
    <h1>Tambah jenis Baru</h1>
    <?php
    $id_jenis=$_GET['id_jenis'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn,"SELECT * FROM jenis WHERE id_jenis='$id_jenis'");
    $result=mysqli_fetch_array($query);

    ?>
    <form action="proses_edit.php?id_jenis=<?php echo $result['id_jenis']?>" method="POST">
        <label for="exampleinputpassword1">id jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  class="form-text" value="<?php 
        echo $result['id_jenis']?> " name="id_jenis">
<br>
<label for="exampleinputpassword1">nama jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1"  class="form-text" value="<?php 
        echo $result['nama_jenis']?> " name="nama_jenis">
        <br>
        <button type="submit" class="btn btn-primary">submit</button>
        </form>
</div>

        
 
</body>
</html>