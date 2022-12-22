<?php

$toDo = file_get_contents("../todolist.json");

header("Content-Type: application/json");

echo $toDo;

