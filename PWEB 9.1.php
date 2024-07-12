<?php
    $gaji = 1000000;
    $tapera = 0.03; // 3% TAPERA
    $tapera_deduction = $gaji * $tapera;
    $thp = $gaji - $tapera_deduction;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        .result {
            background: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Perhitungan Gaji Karyawan</h2>
    <div class="result">
        <p>Gaji sebelum TAPERA = RP. <?php echo number_format($gaji, 0, ',', '.'); ?></p>
        <p>TAPERA = RP. <?php echo number_format($tapera_deduction, 0, ',', '.'); ?> (3%)</p>
        <p>Gaji yang dibawa pulang = RP. <?php echo number_format($thp, 0, ',', '.'); ?></p>
    </div>
</body>
</html>
