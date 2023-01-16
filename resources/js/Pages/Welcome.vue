<template>
    <Head title="Welcome" />

    <!-- Navbar -->
    <nav class="bg-gray-800 py-6">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between">
                <a href="#" class="text-white font-medium"> Reservasi Hotel </a>
                <div class="hidden sm:flex">
                    <Link
                        :href="route('login')"
                        class="text-white px-4 py-2 rounded-md hover:bg-gray-700"
                        >Log in</Link
                    >
                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="text-white px-4 py-2 rounded-md hover:bg-gray-700"
                        >Register</Link
                    >
                </div>
                <div class="sm:hidden">
                    <button class="block text-gray-500 hover:text-white">
                        <svg
                            class="h-6 w-6"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            ></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Card Kamar -->
    <div class="mx-auto px-4 py-6 container">
        <div class="flex flex-wrap justify-center">
            <div class="text-center mt-5">
                <h1 class="text-xl font-medium">Choose your room</h1>
            </div>
            <Kamar :kamar="kamar" />
        </div>
    </div>

    <!-- Card Fasilitas -->
    <div class="mx-auto px-4 py-6 container">
        <div class="flex flex-wrap justify-center">
            <div class="text-center mt-5">
            <h1 class="text-xl font-medium">Various facilities</h1>
            </div>
            <Fasilitas :fasilitas="fasilitas" />
        </div>
    </div>

    <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm text-gray-700 dark:text-gray-500 border-solid bg-green-100 border-2 border-green-500 p-1 rounded-md">Log in</Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 dark:text-gray-500 border-solid bg-sky-200 border-2 border-sky-500 p-1 rounded-md">Register</Link>
            </template>
        </div>

        

    </div> -->
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import Kamar from "./Partials/Kamar.vue";
import Fasilitas from "./Partials/Fasilitas.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const kamar = [
    {
        nama: "kamar 1",
        deskripsi:
            "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut et fugiat dolor molestias commodi ducimus consequatur, quod qui nobis placeat nam alias totam esse blanditiis nemo incidunt dolorum repudiandae. Nulla?",
        linkTombol: "",
        urlGambar: "/img/slide1.jpg",
    },
    {
        nama: "kamar 2",
        deskripsi:
            "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut et fugiat dolor molestias commodi ducimus consequatur, quod qui nobis placeat nam alias totam esse blanditiis nemo incidunt dolorum repudiandae. Nulla?",
        linkTombol: "",
        urlGambar: "/img/slide1.jpg",
    },
    {
        nama: "kamar 3",
        deskripsi:
            "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut et fugiat dolor molestias commodi ducimus consequatur, quod qui nobis placeat nam alias totam esse blanditiis nemo incidunt dolorum repudiandae. Nulla?",
        linkTombol: "",
        urlGambar: "/img/slide1.jpg",
    },
];

const fasilitas = [
    {
        nama: "Kolam Renang",
        urlGambar: "/img/slide1.jpg",
    },
    {
        nama: "Kafetaria",
        urlGambar: "/img/slide1.jpg",
    },
    {
        nama: "Meeting Room",
        urlGambar: "/img/slide1.jpg",
    },
    {
        nama: "Free Wifi 200Mbps",
        urlGambar: "/img/slide1.jpg",
    },
];
</script>
