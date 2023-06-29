<script setup>
import Layout from "../layouts/Layout.vue";
</script>
<template>
    <Layout>
        <h3 class="text-h3">Creating vocab</h3>
        <div class="flex-col">
            <div class="flex-row">
                <v-form>
                    <v-text-field label="Term" />
                    <v-text-field label="Definition" />
                </v-form>
            </div>
        </div>
        <v-btn> Add term </v-btn>
    </Layout>
</template>