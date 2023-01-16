<template>
    <div class="grid grid-cols-4">
        <div v-for="(item, index) in fasilitas" class="w-full p-4">
            <div class="bg-white rounded-lg shadow-md p-6">
                <img :src="item.urlGambar" class="w-full h-auto mx-auto rounded-md object-contain">
                <div class="flex items-center mt-4">
                    <div class>
                        <h2 class="text-lg font-bold capitalize">{{ item.nama }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    fasilitas: Object,
})
</script>