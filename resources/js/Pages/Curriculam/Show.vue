<template>
    <Link href="/curriculam">Main Curriculam List</Link>
    <div>Show Curriculam #{{ curriculam.id }}</div>
    <CurriculamBlock :curriculam="curriculam"></CurriculamBlock>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import CurriculamBlock from "@/Components/CurriculamBlock.vue";

defineProps({
    curriculam: Object,
});
</script>
