<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
    <p>
      <?php
      $arrays = ["名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];

      foreach($arrays as $key => $value){
          echo "{$key} : {$value}<br>";
      }
      ?>
    </P>
  </body>
</html>
