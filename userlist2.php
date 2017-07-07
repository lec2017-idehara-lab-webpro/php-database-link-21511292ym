<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User List2</title>
  </head>
  <body>

<?php
  include_once('database.php');

  $result = $db->query("select * from users");
  while ( $user = $result->fetch_assoc()) {
    print($user['uid'] . ' : ' . $user['name'] . "<br />");
  }
  
  $result->close();
 ?>



  </body>
</html>
