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
    <h1>Tambah barang Baru</h1>
    <form action="simpan.php" method="POST">
        
        <label for="">ID barang</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-text" name="id_barang">
        <br>
        <label for="">ID jenis</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-text"  name="id_jenis">
        <br>
        <label for="">nama barang</label>
        <input type="text" class="form-control" id="exampleInputEmail1" class="form-text"  name="nama_barang" >
        <br>
        <label for="">harga</label>
        <input type="number" class="form-control" id="exampleInputEmail1"  class="form-number" name="harga">
        <br>
        <label for="">stok</label>
        <input type="number" class="form-control" id="exampleInputEmail1"  class="form-number" name="stok" >
        <br>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   
    </div>
</body>
</html>