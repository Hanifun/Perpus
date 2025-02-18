<?php

    $id = $_GET['id'];
    $query = mysqli_query($connect, "DELETE FROM kategori WHERE id_kategori = '$id'");
?>
<script>
    alert("Data berhasil dihapus");
    location.href="index.php?page=kategori";
    window.history.back();  //untuk kembali ke halaman sebelumnya.  //
</script>