<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messages</title>
  </head>
  <body>

<?php
  include_once('database.php');

  $result = $db->query("select uid, body,timestamp from messages");
  while ( $mes = $result->fetch_assoc()) {
    print( $mes['uid'] . " : " . $mes['body'] . "<br />");
  }
  $result->close();
 ?>



  </body>
</html>
