<?php

// leggo il contenuto del file e lo salvo sotto forma di stringa in una variabile
$toDo = file_get_contents("../todolist.json");

// converto la stringa $users in un array. 
// Il secondo argomento "true" indica che vogliamo avere un array associativo
$toDo = json_decode($toDo, true);

$newToDo = [
    "text" => isset($_GET["testo"]) ? $_GET["testo"] : 'prova',
    "status" => isset($_GET["status"]) ?? 'false',
];

$toDo[] = $newToDo;

// converto l'array in una stringa JSON
$toDoJonson = json_encode($toDo, JSON_PRETTY_PRINT);

// salva la stringa usersJson nel file users.json
file_put_contents("../todolist.json", $toDoJonson);

header("Content-Type: application/json");

echo json_encode($newToDo);
