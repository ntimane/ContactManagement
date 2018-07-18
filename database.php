<?php

if (!ini_get('display_errors')) {
  ini_set('display_errors', 1);
}

$db = new PDO('mysql:host=db00;dbname=ticketpros;charset=utf8mb4', 'web', 'webPass');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
