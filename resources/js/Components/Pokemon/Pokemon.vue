<script setup>
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps(['pokemon']);

const form = useForm({
    message: props.pokemon.message,
});

const editing = ref(false);

</script>

<template>
    <div class="p-6 flex space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M320 0c17.7 0 32 14.3 32 32V96H472c39.8 0 72 32.2 72 72V440c0 39.8-32.2 72-72 72H168c-39.8 0-72-32.2-72-72V168c0-39.8 32.2-72 72-72H288V32c0-17.7 14.3-32 32-32zM208 384c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H208zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H304zm96 0c-8.8 0-16 7.2-16 16s7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H400zM264 256a40 40 0 1 0 -80 0 40 40 0 1 0 80 0zm152 40a40 40 0 1 0 0-80 40 40 0 1 0 0 80zM48 224H64V416H48c-26.5 0-48-21.5-48-48V272c0-26.5 21.5-48 48-48zm544 0c26.5 0 48 21.5 48 48v96c0 26.5-21.5 48-48 48H576V224h16z"/></svg>
        name    ： {{ pokemon.name }}           <br/>    
        hp      ： {{ pokemon.hp }}             <br/>
        mp      ： {{ pokemon.mp }}             <br/>
        atk     ： {{ pokemon.atk }}            <br/>    
        def     ： {{ pokemon.def }}            <br/>    
        skill_1 ： {{ pokemon.skill_1 }}        <br/>        
        skill_2 ： {{ pokemon.skill_2 }}        <br/>        
        skill_3 ： {{ pokemon.skill_3 }}        <br/>        
        skill_4 ： {{ pokemon.skill_4 }}        <br/>        
        article ： {{ pokemon.article }}        <br/>        
    </div>
</template>