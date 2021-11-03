<?php

class database{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "mahasiswa_crud";
    private $konek;

    //koneksi ke database
    public function __construct()
    {
        try{
            $this->konek = new mysqli($this->host,$this->username,$this->password,$this->db);
        }catch (Exception $e){
            echo "Koneksi Gagal" .$e->getMessage();
        }
    }

    //Tampilkan Data
    public function tampil_data(){
        $query = "SELECT * FROM tbl_mhs";
        if ($sql = $this->konek->query($query)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    //Tambah Data
    public function insert(){
        if(isset($_POST['submit'])){
                    $nim = $_POST['nim'];
                    $namamhs = $_POST['namamhs'];
                    $jk = $_POST['jk'];
                    $alamat = $_POST['alamat'];
                    $kota = $_POST['kota'];
                    $email = $_POST['email'];
                    $foto = $_FILES['foto']['name'];
                    $ekstensi_boleh = array('png','jpg','jpeg');
                    $x = explode('.',$foto);
                    $ekstensi = strtolower(end($x));
                    $file_tmp = $_FILES['foto']['tmp_name'];
                    $angka_acak = rand(1,999);
                    $foto_baru = $angka_acak.'-'.$foto;
                    if(in_array($ekstensi,$ekstensi_boleh) == true){
                        move_uploaded_file($file_tmp,'gambar/'.$foto_baru);
                    $query = "INSERT INTO tbl_mhs (nim,namamhs,jk,alamat,kota,email,foto) VALUES ('$nim','$namamhs','$jk','$alamat','$kota','$email','$foto_baru')";
                    if($sql = $this->konek->query($query)){
                        echo "<script>alert('Data Berhasil Disimpan :D');</script>";
                        echo "<script>window.location.href = 'Home.php';</script>";
                    }else{
                        echo "<script>alert('Data Gagal Tersimpan :(');</script>";
                        echo "<script>window.location.href = 'Home.php';</script>";

                    }
                }else{
                        echo "<script>alert('Kosong');</script>";
						echo "<script>window.location.href = 'Home.php';</script>";
                }
            }
        }


    public function delete($id){
        $query = "DELETE FROM tbl_mhs where id = '$id'";
        if($sql = $this->konek->query($query)){
            return true;
        }else{
            return false;
        }
    }

    public function edit($id){
        $data = null;

        $query = "SELECT * FROM tbl_mhs WHERE id = '$id'";
        if ($sql = $this->konek->query($query)) {
            while($row = $sql->fetch_assoc()){
                $data = $row;
            }
        }
        return $data;
    }

    public function update($data){
        $query = "UPDATE tbl_mhs SET nim='$data[nim]', namamhs='$data[namamhs]', jk='$data[jk]', alamat='$data[alamat]', kota='$data[kota]', email='$data[email]', foto='$data[baru]' WHERE id='$data[id]'";    
			if ($sql = $this->konek->query($query)) {
				return true;
			}else{
				return false;
			}
    }
}
?>