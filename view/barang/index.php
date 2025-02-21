<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href=git
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/db_inventory_feri/view/barang/#">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/db_inventory_feri/view/jenis/">jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <div class="container">
    <h1>Data barang</h1>
    
    <a href="tambah.php" class="btn btn-primary"> 
 <i class="fa-solid fa-plus"></i>Tambah barang</a>
    <table border="1" class="table table-dark table-active">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>ID jenis</th>
            <th>nama barang</th>
            <th>harga</th>
            <th>stok</th>
            <th>Aksi</th>
        </tr>
        <?php
             include '../../config/koneksi.php';
             $query = mysqli_query($conn, "SELECT * FROM barang");
             $no=1;
             if(mysqli_num_rows($query)){
                echo "";
                while($result=mysqli_fetch_assoc($query)){
                ?>   
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_barang'] ?></td>
                    <td><?php echo $result['id_jenis'] ?></td>
                    <td><?php echo $result['nama_barang'] ?></td>
                    <td><?php echo $result['harga'] ?></td>
                    <td><?php echo $result['stok'] ?></td>
                    <td>
                        <a href="view_edit.php?id_barang=<?php echo $result['id_barang']?>" class="btn btn-warning"> <i class="fa-solid fa-pen"></i> Edit </a>
                        <a href="hapus.php?id_barang=<?php echo $result['id_barang']?>" 
                        onclick="return confirm('kamu yakin ingin menghapus barang ini ?')" 
                        class="btn btn-danger"><i class="fa-solid fa-delete-left"></i> Hapus </a>
                    </td>
                </tr>
                <?php
                $no++;
             }
            } else {
                echo "Data kosong";
            }
            ?>
    </table>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>