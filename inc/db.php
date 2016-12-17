<?php
$pdo = new PDO('mysql:dbname=guiguifrrsadm;host=guiguifrrsadm.mysql.db', 'guiguifrrsadm', 'Deagle59');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
