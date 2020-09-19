<h4>Update Data</h4>
<?php 

require_once "../function.php";

echo $id;

$sql = "SELECT * FROM tblkategori where idkategori = $id";

$result = mysqli_query($koneksi, $sql);

$row = mysqli_fetch_assoc($result);



// $kategori = 'jeli bean';
// $id = 13;
// $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id ";

// echo $sql;

?>

<form action="" method="post">
    kategori : 
    <input type="text" name="kategori" value="<?php echo $row['kategori']?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 

if (isset($_POST['simpan'])) {

    $kategori = $_POST['kategori'];

    $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id ";

    $result = mysqli_query($koneksi, $sql);

    header("location:http://localhost/web-php/17-22/Restoran/kategori/select.php");
}

?>