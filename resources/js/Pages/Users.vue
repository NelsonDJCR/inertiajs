<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    users: Array
});

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <!-- Users -->
             users 
            </h2>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="user in users" :key="user.id">
                        <td>{{ user.name }}</td>
                        <td>{{ user.email }}</td>
                    </tr>
                </tbody>
            </table>
        </template>
    </AppLayout>
</template>
