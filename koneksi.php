<?php 

    class Database 
    {
        private $host = 'localhost',
                $username = 'root',
                $password = '',
                $database = 'db_crud',
                $koneksi ='';

        public function __construct()
        {
            $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->database);
            if (!$this->koneksi) {
                echo "koneksi database gagal : ". mysqli_connect_errno();
            } 
        }

        public function tampilkanData()
        {
            $data = mysqli_query($this->koneksi, 'SELECT * FROM tb_barang');
            while ($row = mysqli_fetch_array($data)) {
                $hasil[] = $row;
            }
            return $hasil;
        }

        public function tambah_data($nama_barang,$stok,$harga_beli,$harga_jual)
        {
            mysqli_query($this->koneksi, "INSERT INTO tb_barang VALUES ('','$nama_barang','$stok','$harga_beli','$harga_jual')");
        }

        public function get_by_id($id_barang)
        {
            $query = mysqli_query($this->koneksi,"SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
            return $query->fetch_array();
        }

        public function update_data($nama_barang,$stok,$harga_beli,$harga_jual,$id_barang)
        {
            mysqli_query($this->koneksi, "UPDATE tb_barang SET nama_barang='$nama_barang',stok='$stok',harga_beli='$harga_beli',harga_jual='$harga_jual' WHERE id_barang='$id_barang'");
        }

        public function delete_data($id_barang)
        {
            mysqli_query($this->koneksi, "DELETE FROM tb_barang WHERE id_barang='$id_barang'");
        }
    }

    $koneksi = new Database();
    

?>