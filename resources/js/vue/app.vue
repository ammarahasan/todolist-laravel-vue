<template>
    <div>
        <div class="todoListContainer">
            <div class="heading">
                <h2 class="title">Todo List</h2>
                <add-item-form v-on:reloadlist="getList()" />
            </div>
            <list-view :items="items" v-on:reloadlist="getList()" />
        </div>
    </div>
</template>

<script>
import AddItemForm from "./addItemForm";
import ListView from "./ListView.vue";

const App = {
    components: {
        "add-item-form": AddItemForm,
        "list-view": ListView
    },
    data: function() {
        return {
            items: []
        };
    },
    methods: {
        getList() {
            axios
                .get("api/items")
                .then(response => {
                    this.items = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    created() {
        this.getList();
    }
};

export default App;
</script>

<style scoped>
.todoListContainer {
    width: 350px;
    margin: auto;
}

.heading {
    background: #e6e6e6;
    padding: 10px;
}

#title {
    text-align: center;
}
</style>
