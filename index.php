<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css"/>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Data Mahasiswa</title>
</head>

<body style="background-color: rgb(214, 214, 214);">
    <nav class="navbar bg-body-tertiary fixed-top"><br>
        <div class="container-fluid"
            style="background-color: rgb(0, 136, 255); padding: 20px; position: fixed; margin-top: 50px; margin-bottom: 20px;">
            <a class="navbar-brand" href="#" style="color: white;"><span
                    style="color: white;padding-right: 20px; font-family: 'Times'; font-size: 35px;"> PBW </span>
                Selamat Datang, RIFQI KHAIRAN FAATHIR</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> Praktikum PBW A </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" style="color: white;">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="color: white;">
                    <li class="nav-item" style="color: white;">
                      <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#"
                        style="font-weight: bold;">Daftar Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="#">Informasi Tugas</a>
                    </li>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <button type="button" class="btn btn-info"
                      style="background-color: red; color: white;">Logout</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
        <h1 style="color: #0f1727; font-weight: 700 ; margin-top: 20px;" align="center"> DAFTAR MAHASISWA <br> PRAKTIKUM
                PEMROGRAMAN BERBASIS WEB </h1>
            <div class="col">
                <div class="card">
                    <div class="p">
                        <button type="button" class="btn btn-success btn-sm"
                            style="width: 200px; height: 40px; border-radius: 10px; margin: 20px 5px 20px 15px;"><a
                                style="text-decoration: none; color:white;" href="tambah.php">Tambah Data</a></button>
                        <button type="button" class="btn btn-danger btn-sm"
                            style="width: 200px; height: 40px; border-radius: 10px; margin: 20px 5px 20px 5px;">Cetak Laporan
                              <img src="file.png" width="30px"></button>
                        <form class="d-flex" role="search" style="float: right; border-radius: 10px; margin: 20px 5px 20px 5px;">
                            <input class="form-control me-2" type="search" placeholder="Cari Berdasarkan NIM"
                                aria-label="Search" style="background-color: rgb(228, 225, 225);">
                            <button class="btn btn-outline-light" type="submit"
                                style="background-color:rgb(120, 169, 225) ;"><img src="cari.png" width="20px"></button>
                        </form>
                    </div>
                    <table class="table table-striped table-hover" border="1px">
                        <tr style="background-color: rgb(0, 174, 255);">
                            <th scope="col">NO</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ket</th>
                            <th scope="col" style="text-align: center;justify-content: center;">Aksi</th>
                        </tr>
                <?php 
                include 'conect.php';
                $no = 1;
                $data = mysqli_query($conect,"SELECT * FROM tbl_mhs2");
                while($d = mysqli_fetch_array($data)){
                ?>
                        <tr>
                            <td>
                                <?php echo $no++; ?>
                            </td>
                            <td>
                                <?php echo $d['nim']; ?>
                            </td>
                            <td>
                                <?php echo $d['nama_mhs']; ?>
                            </td>
                            <td>
                                <?php echo $d['nama_dosen']; ?>
                            </td>
                            <td>
                                <?php echo $d['st']; ?>
                            </td>
                            <td>
                                <?php echo $d['ket']; ?>
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm "
                                    style="width: 80px;height: 30px;border-radius: 10px;"><a
                                        style="text-decoration: none; color:white;"
                                        href="mengubah.php?id=<?php echo $d['id_mahasiswa']; ?>">EDIT</a></button>
                                <button type="button" class="btn btn-danger btn-sm "
                                    style="width: 80px;height: 30px;border-radius: 10px;"> <a
                                        style="text-decoration: none; color:white;"
                                        href="deleted.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a></button>
                            </td>
                        </tr>
                        <?php 
                }
                ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        feather.replace();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>