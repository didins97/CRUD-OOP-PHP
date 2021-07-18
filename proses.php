<?php 
// variabel super global $_GET & $_POST -> menangkap data dari form sesuai dengan metode yang digunakan dipost

include('koneksi.php');
$koneksi = new Database();
$action = $_GET['action'];
if ($action == "add") {
    $koneksi->tambah_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual']);
    header('location:table.php');
} elseif ($action == 'update') {
    $koneksi->update_data($_POST['nama_barang'], $_POST['stok'], $_POST['harga_beli'], $_POST['harga_jual'], $_POST['id_barang']);
    header('location:table.php');
} elseif ($action == 'delete') {
    $id_barang = $_GET['id'];
    $koneksi->delete_data($id_barang);
    header('location:table.php');
}
?>