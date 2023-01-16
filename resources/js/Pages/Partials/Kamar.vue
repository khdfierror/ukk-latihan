<template>
    <div class="grid grid-cols-3">
        <div v-for="(item, index) in kamar" class="w-full p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <img :src="item.urlGambar" class="w-full h-auto mx-auto rounded-md object-contain">
                <div class="flex items-center mt-4">
                    <div>
                        <h2 class="text-lg font-bold capitalize">{{ item.nama }}</h2>
                        <p class="text-gray-700 text-justify mt-2 leading-5">{{ item.deskripsi }}</p>
                    </div>
                </div>
                <div class="mt-4 text-left text-center">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md mx-4">Detail</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    const props = defineProps({
        kamar: Object,
    })
</script>