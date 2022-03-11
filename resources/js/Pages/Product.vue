<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head,Link } from '@inertiajs/inertia-vue3';


const props=defineProps({
    products:Object,
    auth:Object,
    errors:Object,
});
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Products
            </h2>
        </template>

        <div class="pt-5">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-hidden">
                                        <table class="min-w-full">
                                            <thead class="bg-blue-200 border-b ">
                                            <tr>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    #
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Name
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Price
                                                </th>
                                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                                    Status
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr v-for="(product,index) in products.data" class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ index }}</td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{product.name}}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{product.price}}
                                                </td>
                                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{product.status}}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>



                                    </div>
                                    <div class="flex justify-center pt-4">
                                        <nav aria-label="Page navigation example">
                                                 <ul class="flex list-style-none">
                                        <li class="page-item"
                                            :class="{
                                        'active':page.active,
                                        'disabled':page.url==null
                                        }"
                                            v-for="page in props.products.meta.links"

                                        >
                                            <Link v-if="page.url!==null" :href="page.url" :only="['products']"

                                                  type="button"
                                                  class="page-link relative block py-1.5 px-3 border-0  transition-all duration-300 rounded-full "
                                                  :class="{
                                                            'bg-blue-600 text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md':page.active,
                                                            'bg-transparent outline-none text-gray-500 focus:shadow-none  hover:bg-grey-200':!page.active,

                                                        }"
                                                  preserve-scroll preserve-state
                                                  v-html="page.label"></Link>
                                            <span v-else class="page-link relative block py-1.5 px-3 border-0 bg-transparent outline-none transition-all duration-300 rounded-full text-gray-500 pointer-events-none focus:shadow-none" v-html="page.label"></span>

                                        </li>

                                    </ul>
                                        </nav>
                                        </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
