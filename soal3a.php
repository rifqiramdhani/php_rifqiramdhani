<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "testdb";
$koneksi = mysqli_connect($server, $username, $password, $database) or die("Koneksi ke database gagal");
mysqli_set_charset($koneksi, 'utf-8');


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "SELECT nama, alamat,hobi FROM `person` JOIN hobi ON person.id = hobi.person_id WHERE person.nama = '$nama' AND person.alamat = '$alamat'");

    if(mysqli_num_rows($query) > 0){
        while ($getdata = mysqli_fetch_array($query)) {
            echo $getdata['nama'] . "<br>";
            echo $getdata['alamat'] . "<br>";
            echo $getdata['hobi'] . "<br><br>";
        }

        die;
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 3</title>
</head>

<body>
    <form action="#" method="POST">
        <label for="nama">Nama :</label>
        <input type="text" name="nama">
        <br><br>

        <label for="alamat">Alamat :</label>
        <input type="text" name="alamat">
        <br><br>

        <button type="submit">SEARCH</button>
    </form>
</body>

</html>