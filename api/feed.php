<?php

header('Content-Type: application/json');

$pdo = require __DIR__.'/../pdo.php';

$sql = 'SELECT * FROM `events`';

echo json_encode($pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC));
