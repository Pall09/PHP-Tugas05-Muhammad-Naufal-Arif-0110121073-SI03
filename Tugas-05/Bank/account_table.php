<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        * {
            padding: 3px;
            font-family:  'Fira Code', Consolas, Georgia, sans-serif;
        }
        h3 {
            margin-top: 5px;
            text-align: center;
        }
        table {
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h3>Data Tabungan Bank</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>No Account</th>
                <th>Name</th>
                <th>Saldo</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once 'account_bank.php';
                
                $n = 1;
                foreach($arr as $value) {
                    echo "<tr>";
                    echo "<td>$n</td>";
                    echo "<td>$value->nomor</td>";
                    echo "<td>$value->customer</td>";
                    echo '<td>Rp.'.number_format($value->saldo,2,',','.').'</td>';
                    echo "</tr>";
                    $n++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>