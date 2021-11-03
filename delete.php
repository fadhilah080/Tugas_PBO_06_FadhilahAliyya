<?php
include 'Database.php';
$db = new database();
$id = $_REQUEST['id'];
$delete = $db->delete($id);

if($delete){
    echo "<script>alert('Data Berhasil Dihapus! :D');</script>";
		echo "<script>window.location.href = 'Home.php';</script>";
}
?>