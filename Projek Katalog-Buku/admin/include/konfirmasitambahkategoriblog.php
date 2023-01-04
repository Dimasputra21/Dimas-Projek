<?php
    $kategori = $_POST['kategori_blog'];
    if (empty($kategori)) {
        header("Location:index.php?include=tambah-kategori-blog&notif=tambahkosong&jenis=kategori");
    }
    else {
        $sql = "INSERT INTO `kategori_blog`(`kategori_blog`) VALUES ('$kategori')";
        mysqli_query($koneksi,$sql);
       header("Location:index.php?include=kategori-blog&notif=tambahberhasil");
        }
?>