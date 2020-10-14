<?php 
require_once "../function.php";


$sql = "DELETE FROM tblkategori WHERE idkategori = $id";

$result = mysqli_query($koneksi, $sql);

header("http://localhost/web-php/17-22/Restoran/kategori/select.php");

?>