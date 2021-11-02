<?php
include 'DataBase.php';
$db = new database();
$id = $_REQUEST['id'];
$hapus = $db->delete($id);

if($hapus){
    echo "<script>alert('Data Dihapus');</script>";
		echo "<script>window.location.href = 'Index.php';</script>";
}
?>