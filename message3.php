<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messages</title>
  </head>
  <body>

<?php
  include_once('database.php');

  // href のリンクにデータを埋め込める GET メソッドを利用している。
  $result = $db->query("select mid, uid, body, name from messages left join users using(uid)");
  while ( $mes = $result->fetch_assoc()) {
    $reslink = "res.php?res={$mes['mid']}";
    print("<a href='$reslink'>{$mes['mid']}</a> ");
    print( $mes['name'] . " : " . $mes['body'] . "<br />");
  }
  $result->close();
 ?>


  </body>
</html>
