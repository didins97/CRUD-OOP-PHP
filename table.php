<?php 
include('koneksi.php');
$db = new Database();
$data_brg = $db->tampilkanData();
include('header.php');
?>

<div class="row">
  <div class="col-12">
      <div class="card-header">
        <a href="tambah.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
      </div>
      <div class="card-body">
          <table class="table table-bordered" id="table-1">
            <thead>
              <tr>
                <th class="text-center">
                  No
                </th>
                <th>Barang</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            $no = 1;
            foreach ($data_brg as $row){
            ?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $row['nama_barang'];?></td>
                <td><?php echo $row['harga_beli'];?></td>
                <td><?php echo $row['harga_jual'];?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id_barang']; ?>" class="btn btn-outline-primary"><i class="fas fa-edit"></i></a>
					          <a href="proses.php?action=delete&id=<?php echo $row['id_barang']; ?>" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
          </table>
      </div>
  </div>
</div>

</body>
<?php include('script.php')?>
</html>