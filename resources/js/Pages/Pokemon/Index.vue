<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import Pokemon from '@/Components/Pokemon/Pokemon.vue';
import InputError from '@/Components/InputError.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import { useForm, Head } from '@inertiajs/vue3';

defineProps(['pokemons']);
</script>
<template>
    <Head title="Pokemon" />
    
    <AuthenticatedLayout>
        <div class="max-w-2xl mx-auto bg-white mt-4 p-4 sm:p-6 lg:p-8">
            <pokemon v-for="pokemon in pokemons" 
                    :key="pokemon.id" 
                    :pokemon="pokemon" />

        </div>
    </AuthenticatedLayout>
</template>