<style>
    /* *{ */
        /* margin: 0; */
        /* padding: 0; */
        /* box-sizing: border-box; */
        /* } */
        h2{
            color: #faa;
            /* background-color: #aaf; */
        }
        <?=include './reset.html'?>
</style>

<h2>九九乘法表</h2>
<?php
$value99= [];
for ($i=1; $i <=9; $i++) { 
    for ($j=1; $j <=9; $j++) { 
        $value99[]= "$i x $j = " .$i*$j;
    }
}
// echo "<pre>";
// print_r($value99);
// echo "</pre>";

foreach ($value99 as $key => $value) {
    echo "$value";
    if ($key%9==8) {
    echo "<br>";

    }

}

?>