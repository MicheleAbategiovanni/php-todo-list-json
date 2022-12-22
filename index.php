<?php

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - PHP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div id="app">

        <header>
            <nav class="nav navbar justify-content-center">
                <h1 class="text-danger">TODO LIST</h1>
            </nav>
        </header>

        <main class="container">

            <section>
                <div class="mb-5 rounded-3">

                    <form>

                        <div class="input-group ">
                            <span class="input-group-text">Todo:</span>
                            <input type="text" class="form-control" placeholder="" v-model="formData.text">
                            <button class="btn btn-danger" @click.prevent="onToDo">Aggiungi</button>
                        </div>

                    </form>

                </div>

            </section>

            <section>

                <div class="container-todolist border rounded-3 bg-todolist-container">

                    <div class="d-flex justify-content-between border-bottom p-3 align-items-baseline" v-for="element in toDoList">
                        <p :class="(element.status === true ) ? 'text-decoration-line-through' : '' ">{{element.text}}</p>

                        <a href="#" class="rounded-2 bg-danger p-2 text-white ">
                            <i class="fa-solid fa-trash fs-6" ></i>
                        </a>


                    </div>

                </div>

            </section>
        </main>


    </div>



    <script src="js/main.js"></script>
</body>

</html>