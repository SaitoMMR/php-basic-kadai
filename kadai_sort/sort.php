<!DOCUMENT html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP基礎編</title>
  </head>

  <body>
    <p>
      <?php

      function sort_2way($array, $order){
        if($order === TRUE){
          echo '昇順にソートします。<br>';
          sort($array);
          foreach($array as $elem){
            echo "{$elem}<br>";
          }
        }else{
          echo '降順にソートします。<br>';
          rsort($array);
          foreach($array as $elem){
            echo "{$elem}<br>";
          }
        }
      }

      $nums = [15, 4, 18, 23, 10];
      $order = TRUE;
      sort_2way($nums,$order);

      ?>
    </P>
  </body>
</html>