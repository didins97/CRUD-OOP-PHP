<?php include('header.php')?>
<form action="proses.php?action=add" method="POST">
  <div class="form-group">
    <label for="name">Nama Barang</label>
    <input type="name" class="form-control" name="nama_barang" placeholder="Enter Barang">
  </div>
  <div class="form-group">
    <label for="name">Stok</label>
    <input type="number" class="form-control" name="stok" placeholder="Enter Stok">
  </div>
  <div class="form-group">
    <label for="name">Harga Jual</label>
    <input type="number" class="form-control" name="harga_jual" placeholder="Enter Harga Jual">
  </div>
  <div class="form-group">
    <label for="name">Harga Beli</label>
    <input type="number" class="form-control" name="harga_beli" placeholder="Enter Harga Beli">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<?php include('script.php')?>
</html>
