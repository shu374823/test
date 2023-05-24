<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
        }
        th, td {
            width: 11.11%;
            text-align: center;
            border: 1px solid black;
            transition: all 0.3s;
            position: relative;
            box-shadow: 0px 0px 5px rgba(0,0,0,0.3);
        }
        th, td:hover {
            transform: scale(1.1) translateY(-10px);
            box-shadow: 0px 5px 15px rgba(0,0,0,0.3);
            z-index: 10;
        }
    </style>
</head>
<body>
    <table>
    <?php
        echo "<tr>";
        for ($x = 1; $x <= 9; $x++) {
            $color = "rgba(" . (255 - $x * 20) . ", " . ($x * 20) . ", " . (255 - $x * 10) . ", 0.8)";
            echo "<th style='background: linear-gradient(to bottom, {$color} 0%, white 100%);'>X = {$x}</th>";
        }
        echo "</tr>";

        for($y = 1; $y <= 9; $y++) {
            echo "<tr>";
            for($x = 1; $x <= 9; $x++) {
                $color = "rgba(" . (255 - $x * 20) . ", " . ($x * 20) . ", " . (255 - $x * 10) . ", 0.8)";
                $result = $x * $y;
                echo "<td style='background: linear-gradient(to bottom, {$color} 0%, white 100%);'>{$x}*{$y}={$result}</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>