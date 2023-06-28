<script setup>
import NavbarVue from "./Navbar.vue";
</script>
<template>
    <NavbarVue></NavbarVue>
    <div class="container">
        <slot></slot>
    </div>
</template>
