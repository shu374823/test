<style>
    td{
        border: 1px solid #faa;
        width: 30px;
        height: 30px;
        text-align: center;
        border-radius: 15px;
        box-shadow: 2px 2px 5px #faa;
        background-color: #a8a;
        color: #818;
        padding: 10px;
      }
      td:hover{
        /* background-color:  red; */
      }
      h2{
        text-align: center;
        color: pink;
      }
      #x{
        color: red;

      }
      table{
        margin: auto;
        background-color: #28c
      }
      th{
        border: 3px solid #aaa;
        width: 30px;
        height: 30px;
        border-radius: 5px;
        background-color: #ccc;
        color: #777;
    }
    body{
      background-color: #28a
      ;
    }
    /* .n$ijkey{ */
    <?php '.'.$ijkey ?>{
      color: red;
      
    }
    /* <?php echo "'.'.$ijkey:hover{
      color: #000;}" ?>;*/
    .<?= $ijkey ?>:hover {
    color: #000;
    }
    
</style>
<table>
  <h2>九九乘法表</h2>
  <h2 id="x">999999</h2>
  <thead>
    <tr>
      <th> X </th>
      <?php
      for ($i = 1; $i <= 9; $i++) {
        echo "<th>$i</th>";
      }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php
    for ($i = 1; $i <= 9; $i++) {
      echo "<tr>";
      echo "<th>$i</th>";
      for ($j = 1; $j <= 9; $j++) {
        $ij=[$i*$j => $i*$j];
        // echo "<pre>";
        // print_r($ij);
        // echo "</pre>";
        foreach($ij as $ijkey =>$ijvalue){
          // echo "<td>" . ($i * $j). "</td>";
          echo "<td class = 'n$ijkey'>" . $ijvalue . "</td>";
          // print_r('n'.$ijkey);
        }
      }
      echo "</tr>";
    }
    ?>
  </tbody>
</table>






