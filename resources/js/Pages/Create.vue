<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { router, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: '',
    email: '',
    password: '',
});

const sendForm = () => {
    // router.post('/admin/newRegister', form)
    form.post(route('newRegister'), {
        onFinish: () => {
            window.location.href = '/om';
        },
    });
};

</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create user
            </h2>
            <form class="w-full max-w-lg"  @submit.prevent="sendForm">
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name"
                        >
                            Name
                        </label>
                        <input
                            v-model="form.name"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text"
                        />
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-last-name"
                        >
                            Email
                        </label>
                        <input
                            v-model="form.email"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text"
                        />
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-password"
                        >

                            Password
                        </label>
                        <input
                            v-model="form.password"
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="password"
                        />
                        <p class="text-gray-600 text-xs italic">
                            Make it as long and as crazy as you'd like
                        </p>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        >
                            Button
                        </button>
                    </div>
                </div>
            </form>
        </template>
    </AppLayout>
</template>
