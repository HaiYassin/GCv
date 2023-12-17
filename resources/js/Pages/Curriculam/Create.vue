<template>
    <Link href="/curriculam">Main Curriculam List</Link>
    <div>Curriculam Create</div>

    <form @submit.prevent="create">
        <div>
            <div>
                <label>Title</label>
                <input type="text" v-model="form.title" />
            </div>
            <div>
                <label>Description</label>
                <input type="text" v-model="form.description" />
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { reactive } from "vue";
import { Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    title: null,
    description: null,
});

const create = () => form.post("/curriculam", form);
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px;
}
</style>
