<?php

$toDo = file_get_contents("../todolist.json");

// converto la stringa $users in un array. 
// Il secondo argomento "true" indica che vogliamo avere un array associativo
// $users = json_decode($users, true);

// Impostare il header per indicare al browser che il contenuto è in formato JSON
header("Content-Type: application/json");

// Converte l'array in json e lo stampa sulla pagina
// echo json_encode($users);
echo $toDo;

