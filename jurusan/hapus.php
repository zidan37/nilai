<?php
if (isset($_GET['id'])) {
    include "config.php";
    $id = $_GET['id'];

    $sql = "DELETE from jurusan WHERE id='$id'";
    $simpan = mysqli_query($con, $sql);
    if ($simpan) {
        header('location:index.php?m=jurusan&s=tampil');
    
    } else {
        include "index.php?m=jurusan&s=tampil";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }   
} else {
    echo '<script>window.history.back()</script>';
}