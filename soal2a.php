<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOAL 2</title>
</head>

<body>
    <?php if ($_SERVER['REQUEST_METHOD'] != "POST") :  ?>
        <form action="#" method="post">
            <label for="nama">Nama Anda :</label>
            <input type="text" name="nama">

            <br>
            <button type="submit" name="submit-nama">SUBMIT</button>
        </form>

    <?php else : ?>

        <?php if (isset($_POST['submit-nama'])) : ?>

            <form action="#" method="post">
                <label for="umur">Umur Anda :</label>
                <input type="text" name="umur">
                <input type="hidden" name="nama" value="<?= $_POST['nama'] ?>">

                <br>
                <button type="submit" name="submit-umur">SUBMIT</button>
            </form>
        <?php endif ?>

        <?php if (isset($_POST['submit-umur'])) : ?>
            <form action="#" method="post">
                <label for="hobi">Hobi Anda :</label>
                <input type="text" name="hobi">
                <input type="hidden" name="nama" value="<?= $_POST['nama'] ?>">
                <input type="hidden" name="umur" value="<?= $_POST['umur'] ?>">

                <br>
                <button type="submit" name="submit-hobi">SUBMIT</button>
            </form>
        <?php endif ?>

        <?php
            if (isset($_POST['submit-hobi'])) {
                echo "Nama : " . $_POST['nama'] . "<br>";
                echo "Umur : " . $_POST['umur'] . "<br>";
                echo "Hobi : " . $_POST['hobi'] . "<br>";
            }
        ?>

    <?php endif ?>


</body>

</html>