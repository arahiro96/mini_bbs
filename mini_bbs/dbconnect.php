<?php

try {
  $db = new PDO('mysql:dbname=mini_bbs;host=localhost;charset=utf8','root','root');
  echo "接続OK！";
} catch (PDOException $e) {
  echo 'DB接続エラー！: ' . $e->getMessage();
}









?>