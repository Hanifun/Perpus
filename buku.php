<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800 text-center">Daftar Judul Buku</h1>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Buku</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>No</th>
                                    <!-- <th>Kategori</th> -->
                                    <th>Buku</th>
                                    <th>Penulis</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                        

                                <?php
                                $query = "SELECT * FROM buku";
                                $result = mysqli_query($connect, $query);
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr>";
                                    echo "<td>" . $no++ . "</td>";
                                    // echo "<td>" . htmlspecialchars($row['id_kategori']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['judul']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['penulis']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['penerbit']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['tahun_terbit']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['deskripsi']) . "</td>";
                                    echo "<td>
                                            <a href='?page=kat_ubah&id=" . $row['id_kategori'] . "' class='btn btn-warning btn-sm'>
                                                <i class='fas fa-edit'></i> Ubah
                                            </a>
                                            
                                            <a href='?page=kat_hapus&id=" . $row['id_kategori'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Apakah Anda yakin ingin menghapus kategori ini?\")'>
                                                <i class='fas fa-trash'></i> Hapus
                                            </a>
                                          </td>";
                                    echo "</tr>";
                                }
                                ?>
                                
                            
                        </table>
                        <div class="form-group d-flex justify-content-between">
                            <a type="submit" name="submit" class="btn btn-primary" href="?page=buku_tambah">
                                <i class="fas fa-plus fa-sm"></i> Tambah Buku
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>