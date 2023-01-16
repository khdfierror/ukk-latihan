<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,

});


</script>

<template>
    <Head title="Welcome" />

    <!-- Navbar -->
<nav class="bg-gray-800 py-6">
  <div class="container mx-auto px-4">
    <div class="flex items-center justify-between">
      <a href="#" class="text-white font-medium">
        Reservasi Hotel
      </a>
      <div class="hidden sm:flex">
        <Link :href="route('login')" class="text-white px-4 py-2 rounded-md hover:bg-gray-700">Log in</Link>
        <Link v-if="canRegister" :href="route('register')" class="text-white px-4 py-2 rounded-md hover:bg-gray-700">Register</Link>

      </div>
      <div class="sm:hidden">
        <button class="block text-gray-500 hover:text-white">
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- Slider -->

<div class="relative overflow-hidden flex">
  <div class="relative block w-full flex-1">
    <img src="{{ asset('img/slide1.jpg') }}" class="w-full h-auto">
  </div>    
  <div class="relative block w-full flex-1">
    <img src="slide2.jpg" class="w-full h-auto">
  </div>
  <div class="relative block w-full flex-1">
    <img src="slide3.jpg" class="w-full h-auto">
  </div>
</div>


<!-- Card -->
<div class="container mx-auto px-4 py-6">
    <div class="flex flex-wrap justify-center">
        <div class="w-full md:w-1/3 p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <img src="image1.jpg" class="w-16 h-16 rounded-full mr-6">
                    <div>
                        <h2 class="text-lg font-medium">Card Title 1</h2>
                        <p class="text-gray-700">Card Description 1</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md mx-4">Detail</button>    
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <img src="image2.jpg" class="w-16 h-16 rounded-full mr-6">
                    <div>
                        <h2 class="text-lg font-medium">Card Title 2</h2>
                        <p class="text-gray-700">Card Description 2</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md mx-4">Detail</button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center">
                    <img src="image3.jpg" class="w-16 h-16 rounded-full mr-6">
                    <div>
                        <h2 class="text-lg font-medium">Card Title 3</h2>
                        <p class="text-gray-700">Card Description 3</p>
                    </div>
                </div>
                <div class="mt-4 text-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md mx-4">Detail</button>
                </div>
            </div>
        </div>
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
