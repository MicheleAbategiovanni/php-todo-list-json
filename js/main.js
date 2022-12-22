const { createApp } = Vue;

const app = createApp({
    data() {
        return {
            toDoList: [],
            formData: {},
        };
    },
    methods: {
        fetchToDo() {
            axios.get("api/todolist.php").then((resp) => {
                this.toDoList = resp.data;
            });
        },
        onToDo() {

            console.log(this.formData);
            axios.post("api/createTodo.php", this.formData, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((resp) => {
                // ricarico la lista degli utenti
                this.fetchToDo();
            });
        }
    },
    mounted() {
        this.fetchToDo();
    },
}).mount("#app");