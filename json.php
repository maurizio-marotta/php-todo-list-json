<?php

    $list = [
      [
        'text'=>'Fare la spesa',
        'done'=> false
      ],
      [
        'text'=>'Finire Esercizi Vue',
        'done'=> true
      ],
      [
        'text'=>'Fare la Lavatrice',
        'done'=> false
      ],
      [
        'text'=>'Fare bagnetto a Nedo',
        'done'=> true
      ],
      [
        'text'=>'Comprare crocchette per Nedo',
        'done'=> true
      ],
    ];

    $json_string = json_encode($lists);
    file_put_contents('lista.json',json_encode($lists))
?>