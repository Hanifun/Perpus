
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">Tambah Kategori Buku</h1>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Kategori</h6>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_POST['submit'])) {
                        $nama_kategori = $_POST['nama_kategori'];
                        $query = "INSERT INTO Buku VALUES ('','$nama_kategori','judul','penulis','penerbit','tahun_terbit','deskripsi')";
                       
                    $cek = mysqli_query($connect, "SELECT * FROM buku WHERE id_buku = '$idbook'");
                    $check = mysqli_num_rows($cek);
                    if($check > 0){
                        echo '<div class="alert alert-warning" role="alert">
                                    Kategori sudah ada!
                                  </div>';
                        
                        }else{   
                        if (mysqli_query($connect, $query)) {
                            echo '<div class="alert alert-success" role="alert">
                                    Kategori berhasil ditambahkan!
                                  </div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">
                                    Kategori gagal ditambahkan: ' . mysqli_error($connect) . '
                                  </div>';
                        }
                    }
                }
                    ?>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama_kategori">Kategori</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            <label for="nama_kategori">Judul Buku</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_katad" required>
                            <label for="nama_kategori">Penulis</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            <label for="nama_kategori">Penerbit</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            <label for="nama_kategori">Tahun Terbit</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                            <label for="nama_kategori">Deskripsi</label>
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" required>
                        </div>
                        <div class="form-group d-flex justify-content-between">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fas fa-plus fa-sm"></i> Tambah
                            </button>
                            <a type="reset" href="?page=kat_tambah" class="btn btn-warning">
                                <i class="fas fa-undo fa-sm"></i> Reset
                            </a>
                            <a href="?page=kategori" class="btn btn-secondary">
                                <i class="fas fa-arrow-left fa-sm"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
```

