<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messages</title>
  </head>
  <body>

<?php
  include_once('database.php');

  $result = $db->query("select mid, uid, body, name from messages left join users using(uid)");
  while ( $mes = $result->fetch_assoc()) {
    print( "(" . $mes['mid'] . ")" );
    print( $mes['name'] . " : " . $mes['body'] . "<br />");
  }
  $result->close();
 ?>



  </body>
</html>
