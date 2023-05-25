<?php

$json_string= file_get_contents('lista.json');


//print_r($lists);die;

if (isset($_POST['todoItem'])) {
  $lists = json_decode($json_string, true);
  $lists[] =[
      'text' => $_POST['todoItem'],
      'done' => false
    ];

  filePut($lists);
  $lists = json_encode($lists);
  $json_string = $lists;

  
  
  //filePut = ($lists);
}

function filePut($lists){
  file_put_contents('lista.json', json_encode($lists));
}

header('Content-Type: application/json');




echo $json_string;

?>