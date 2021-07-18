<?php 
include('koneksi.php');
$db = new Database();
$id_barang = $_GET['id'];
if (!is_null($id_barang)) {
    $data_barang = $db->get_by_id($id_barang);
} else {
    header('location::table.php');
}
include('header.php');
?>
<form action="proses.php?action=update" method="POST">
<input type="hidden" name="id_barang" value="<?php echo $data_barang['id_barang']; ?>"/>
  <div class="form-group">
    <label for="name">Nama Barang</label>
    <input type="name" class="form-control" name="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>" placeholder="Enter Barang">
  </div>
  <div class="form-group">
    <label for="name">Stok</label>
    <input type="number" class="form-control" name="stok" value="<?php echo $data_barang['stok']; ?>" placeholder="Enter Stok">
  </div>
  <div class="form-group">
    <label for="name">Harga Jual</label>
    <input type="number" class="form-control" name="harga_jual" value="<?php echo $data_barang['harga_jual']; ?>" placeholder="Enter Harja Jual">
  </div>
  <div class="form-group">
    <label for="name">Harga Beli</label>
    <input type="number" class="form-control" name="harga_beli" value="<?php echo $data_barang['harga_beli']; ?>" placeholder="Enter Harga Beli">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<?php include('script.php')?>
</html>
