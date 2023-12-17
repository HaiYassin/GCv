<template>
  <Link :href="`/curriculam/create`"> + </Link>
  <div>Curriculam List</div>
  <div v-for="curriculam in curriculams" :key="curriculam.id">
    <Link :href="`/curriculam/${curriculam.id}`">
      <CurriculamBlock :curriculam="curriculam"></CurriculamBlock>
    </Link>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import CurriculamBlock from '@/Components/CurriculamBlock.vue'
defineProps({
  curriculams: Array,
})
</script>
