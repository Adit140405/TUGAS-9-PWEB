<?php
$a = 5;
$b = 4;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expressions Evaluation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        .table th {
            background-color: #f2f2f2;
        }
        .true {
            color: green;
            font-weight: bold;
        }
        .false {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2>Expression Evaluation</h2>
    <table class="table">
        <tr>
            <th>Expression</th>
            <th>Result</th>
        </tr>
        <tr>
            <td><?php echo "$a == $b"; ?></td>
            <td class="<?php echo ($a == $b) ? 'true' : 'false'; ?>"><?php echo ($a == $b) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo "$a != $b"; ?></td>
            <td class="<?php echo ($a != $b) ? 'true' : 'false'; ?>"><?php echo ($a != $b) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo "$a > $b"; ?></td>
            <td class="<?php echo ($a > $b) ? 'true' : 'false'; ?>"><?php echo ($a > $b) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo "$a < $b"; ?></td>
            <td class="<?php echo ($a < $b) ? 'true' : 'false'; ?>"><?php echo ($a < $b) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo "($a != $b) && ($a > $b)"; ?></td>
            <td class="<?php echo (($a != $b) && ($a > $b)) ? 'true' : 'false'; ?>"><?php echo (($a != $b) && ($a > $b)) ? 'true' : 'false'; ?></td>
        </tr>
        <tr>
            <td><?php echo "($a != $b) || ($a > $b)"; ?></td>
            <td class="<?php echo (($a != $b) || ($a > $b)) ? 'true' : 'false'; ?>"><?php echo (($a != $b) || ($a > $b)) ? 'true' : 'false'; ?></td>
        </tr>
    </table>
</body>
</html>
