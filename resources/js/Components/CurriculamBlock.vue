<template>
    <div>{{ curriculam.title }} : {{ curriculam.description }}</div>
</template>

<script setup>
defineProps({
    curriculam: Object,
});
</script>
