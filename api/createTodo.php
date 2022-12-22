<?php

$toDo = file_get_contents("../todolist.json");

$toDo = json_decode($toDo, true);

$newToDo = [
    "text" => $_POST["text"] ? $_POST["text"] : 'prova',
    "status" => isset($_POST["status"]) ?? 'false',
];

$toDo[] = $newToDo;

$toDoJonson = json_encode($toDo, JSON_PRETTY_PRINT);

file_put_contents("../todolist.json", $toDoJonson);

header("Content-Type: application/json");

echo json_encode($newToDo);
