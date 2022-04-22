<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispenser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    * {
        font-family: 'Times New Roman', Times, serif;
    }

    body{
        margin-top: 20px;
        margin-left: 12px;
    }
    hr {
        margin-right: 12px;
    }
    </style>
</head>
<body>
    <?php
        require_once 'class_ambilMinum.php';

        $dispenser = new ambilMinum('Kopi', 2000, 1000, 5000);
        $dispenser->transaksi($minuman->uangSaku);
        $dispenser->volume = 55;


        echo '<h2>Dispenser</h2>';
        echo '<p>Volume Dispenser : ' . $dispenser->volumeGelas . 'ml' . "</p>";
        echo '<p>Jenis Minuman : ' . $dispenser->namaMinuman . "</p>";
        echo '<p>Uang Kamu : Rp.' . number_format($dispenser->uangSaku,2,',','.') . "</p>";
        echo '<hr>';
        echo '<p>Harga Minuman Sesuai Ukuran : ' . $dispenser->harga . "</p>";
        echo '<p>Sisa Volume Dispenser : ' . $dispenser->volumeAkhir() . 'ml' . "</p>";
        echo '<p>Sisa uang : Rp.' . number_format($dispenser->transaksi(),2,',','.'). '</p>';
    ?>
</body>
</html>