<template>
    <div>
        <div v-for="(item, index) in items" :key="index">
            <list-item
                :item="item"
                class="item"
                v-on:itemchanged="$emit('reloadlist')"
            ></list-item>
        </div>
    </div>
</template>

<script>
import ListItem from "./ListItem";

const ListView = {
    props: ["items"],
    components: {
        "list-item": ListItem
    }
};

export default ListView;
</script>

<style scoped>
.item {
    background: #e6e6e6;
    padding: 5px;
    margin-top: 5px;
}
</style>
