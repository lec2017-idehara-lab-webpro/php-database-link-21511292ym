<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User List</title>
  </head>
  <body>

<?php
  include_once('database.php');

  $result = $db->query("select * from users");
  while ( $user = $result->fetch_assoc()) {
    var_dump($user);
  }
  $result->close();
 ?>



  </body>
</html>
