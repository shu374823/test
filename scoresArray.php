<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-size;
    }
    table{
        border-collapse: collapse;
        border: 1px solid #faa;
        border-radius: 10px;
        margin: auto;
        border: 4mm ridge rgba(211, 220, 50, .7);
    }
    td{
        border-radius: 20px;
        width: 60px;
        height: 40px;
        text-align: center;
        border: 1px solid #faa;
    }
    h2{
        text-align: center;
        margin-top: 20px;
    }
</style>
<?php
$students = [
    'July'=> [
        '國文' => 95,
        '英文' => 64,
        '數學' => 70,
        '地理' => 90,
        '歷史' => 84,
    ],
    'Amo'=> [
        '國文' => 88,
        '英文' => 78,
        '數學' => 54,
        '地理' => 81,
        '歷史' => 71,
    ],
    'John'=> [
        '國文' => 45,
        '英文' => 60,
        '數學' => 68,
        '地理' => 70,
        '歷史' => 62,
    ],
    'Peter'=> [
        '國文' => 59,
        '英文' => 32,
        '數學' => 77,
        '地理' => 54,
        '歷史' => 42,
    ],
    'Hebe'=> [
        '國文' => 71,
        '英文' => 62,
        '數學' => 80,
        '地理' => 62,
        '歷史' => 64,
    ],
];
$subjects= [
    '',
    '國文',
    '英文',
    '數學',
    '地理',
    '歷史'
];
echo '<h2>成績表</h2>';
echo '<table>';
foreach ($subjects as $subject) {
    // echo '<tr>';
    echo '<td>';
    echo $subject;
    echo '</td>';
    // echo '</tr>';
};
foreach ($students as $stu => $scores) {
    echo '<tr>';
    echo '<td>';
    echo $stu;
    echo '</td>';
    foreach ($scores as $sub => $score) {
        echo '<td>';
        echo $score;
        echo '</td>';
    };
    echo '</tr>';
};
echo '<br>';
echo '</table>';



?>