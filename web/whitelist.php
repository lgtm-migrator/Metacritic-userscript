<?php
require_once '../mysql.php';

header('Content-Type: image/png');

if(!isset($_REQUEST['ref']) || !isset($_REQUEST['docurl']) || !isset($_REQUEST['metaurl'])) {
  readfile('red.png');
  exit;
}
  
$mysqli = @new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
  readfile('red.png');
  exit;
}

@$mysqli->real_query('INSERT INTO `whitelist`(id,docurl,metaurl) VALUES ("'.$mysqli->real_escape_string($_REQUEST['ref']).'", "'.$mysqli->real_escape_string($_REQUEST['docurl']).'", "'.$mysqli->real_escape_string($_REQUEST['metaurl']).'")');


?>�PNG

   IHDR   
   
   ��]�   PLTE"�L=   IDATx^}��    ����7�h  H�e�    IEND�B`�