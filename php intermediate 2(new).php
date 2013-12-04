<!doctype html>
<html>
<head>
   <style type="text/css">

    *{
      font-size:16px;
      font-family:arial;
      padding:10px;
    }
    .bold{
      font-weight:bolder;
      font-size:20px;
    }
    table{
      border:5px solid black;
    }
    table td{
      border:1px solid black;
    }
    table tr:nth-of-type(odd){
      background:lightgray;
    }




   </style>
</head>
<body>
    <table>
      <?php

      echo "<tr><td></td>";

      for ($x=1; $x < 10; $x++) {
        echo "<td class='bold'>" .$x. "</td>";
      }
      echo "</tr>";
      for ($y=1; $y< 10; $y++) {
        echo "<tr>";
        echo "<td class='bold'>" .$y. "</td>";
          for ($x=1; $x < 10 ; $x++) {
            echo "<td>" .$x*$y. "</td>";
          }
        echo "</tr>";
      }
      ?>


    </table>
</body>
</html>