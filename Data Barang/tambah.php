<?php

include 'database_conn.php';
$query = "SELECT * FROM sepatu limit 200";
$result = mysqli_query($db_connect, $query);

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/tambah.css">
  </head>
  <body>
    <div class="nav-bar">
        <div class="row">
            <div class="col-2">
                <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                        <svg class="bi pe-none me-2" width="40" height="32"></svg>
                        <span class="fs-4">Iuqlo Store</span>
                    </a>
                    <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Products
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                            Orders
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Stocks
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link link-dark">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                            Customers
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-10">
                <nav class="navbar bg-body-tertiary bg-red">
                    <div class="container-fluid">
                        <a class="navbar-brand">Navbar</a>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </nav>

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800" style="margin-top: 20px; font-size: 35px; padding-top: 20px;"><b>Tabel Data Barang</b></h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary" style="font-size: 22.5px;">Tabel Data</h6>
                    </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID Barang</th>
                                    <th>Name Barang</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        <tbody>

                        <!-- Fetch data customer dengan arry associative -->
                        <?php if ($result->num_rows > 0) : ?>
                            <?php while ($barang_data = mysqli_fetch_assoc($result)) : ?>
                                <tr style="vertical-align:middle;">
                                    <th scope="row"><?php echo $barang_data['id_sepatu'] ?> </th>
                                    <td><?php echo $barang_data['nama_sepatu'] ?></td>
                                    <td><?php echo $barang_data['harga_sepatu'] ?></td>
                                    <td><?php echo $barang_data['jumlah'] ?></td>
                                    <td><img src="../Img/<?php echo $barang_data['gambar'] ?>" style="width: 75px; height: 75px;" alt=""></td>
                                    <td>
                                        <a href="edit.php?id_sepatu=<?php echo $barang_data['id_sepatu']; ?>" class="btn btn-primary">Edit</a>
                                        <a href="delete.php?id_sepatu=<?php echo $barang_data['id_sepatu']; ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" rowspan="1" headers="">Tidak ada data ditemukan!</td>
                            </tr>
                        <?php endif; ?>
                        <?php mysqli_free_result($result); ?>
                        </tbody>
                    </table>
                <div class="float-end">
                <a href="add.php" class="btn btn-success">Tambah Barang</a>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>