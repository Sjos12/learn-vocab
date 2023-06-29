<script setup>
import NavbarVue from "./Navbar.vue";
</script>
<template>
    <div class="bg-gray-900 text-white h-screen">
        <NavbarVue></NavbarVue>
        <div class="mx-5 mt-5">
            <slot></slot>
        </div>
    </div>
</template>
