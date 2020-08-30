<?php





$dns = 'mysql:host=mysql_host; dbname=test_database; charset=utf8mb4';
$admin_user = 'docker';
$admin_pass = 'docker';

try{
  $db = new PDO($dns,$admin_user,$admin_pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  echo '<br><br><br>接続OK<br>';
}catch(PDOException $e) {
  echo '<br><br><br>接続出来ませんでした<br>';
}

// $mysqli = new mysqli('mysql_host', 'docker', 'docker', 'test_database');
// if (!class_exists('mysqli')) {
//     echo 'We don\'t have mysqli class!!!';
// } else {
//     echo 'Phew we have it!';
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test</title>
</head>
<body>
  <h1>test</h1>
<?php
  phpinfo();
?>
</body>
</html>