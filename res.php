<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Response</title>
  </head>
  <body>

<?php
  include_once('database.php');

  // GET メソッドで res の番号が送られてくることを想定
  if( !isset($_GET['res']) || strlen($_GET['res']) == 0 || $_GET['res'] == 0 )
    die('無効な呼び出しです</body></html>');

  $resnr = $_GET['res'];
  print( $resnr . " への返信です。<hr />");

  // 本当は、ログインしていないと書けない

//  if(!isset($_SESSION['login']) || strlen($_SESSION['login'])==0)
//    die('返信前に<a href="login.php">ログイン</a>してください。</body></html>');

print "
 <form action='postres.html' method='post'>
   <input type='text' name='mes'>
   <input type='hidden' name='resnr' value='$resnr'>
   <input type='submit'>
 </form>
 ";
?>

  </body>
</html>
