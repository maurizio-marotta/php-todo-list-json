<?php

$json_string= file_get_contents('lista.json');

$lists = json_decode($json_string, true);

header('Content-Type: application/json');

echo json_encode($lists);
?>