?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan Dan Perulangan</title>
</head>
<body>
<body>
    <h1>Input Nama dan Diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php

        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Lea":
                    $pesan = $_POST['nama']." adalah orang Jakarta";
                break;
                case "Kinra":
                    $pesan = $_POST['nama']." berasal dari pulau Jawa";
                break;
                default:
                    $pesan = $_POST['nama']." Vincenzo adalah salah satu drama korea ";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
                echo "WARNING!!! Anda belum input nama dan jumlah";
        }
    ?>
</body>
</html>