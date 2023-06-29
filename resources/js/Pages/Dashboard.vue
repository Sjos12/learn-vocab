<script setup>
import Layout from "../layouts/Layout.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <Layout>
        <div class="flex items-center justify-between">
            <h3 class="text-h3">Dashboard</h3>
            <div class="flex">
                <Link href="/vocab/create">
                    <v-btn> Create Vocab </v-btn>
                </Link>
            </div>
        </div>
    </Layout>
</template>