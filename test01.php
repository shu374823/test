<!DOCTYPE html>
<html>
<head>
    <style>
        .item {
            transition: all 0.3s;
        }
        .item:hover {
            transform: scale(1.2);
            filter: brightness(120%);
        }
    </style>
</head>
<body>
    <?php
        $colors = array("red", "orange", "yellow", "green", "blue", "indigo", "violet");
        $color_index = 0;
        for($x = 2; $x <= 9; $x++) {
            for($y = 1; $y <= 9; $y++) {
                $result = $x * $y;
                echo "<p class='item' style='color: {$colors[$color_index]}'>{$x}*{$y}={$result}</p>";
                $color_index = ($color_index + 1) % count($colors);
            }
        }
    ?>
</body>
</html>