<template>
 <h1>Bags</h1>
 <hr>

<div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="bag in bags" :key="bag.id">
        <div class="card-header">
            <h5> Bag: {{bag.id}}</h5>
        </div>
        <div class="card-body" >
            <h6>Bag Information</h6>
            <table class="table">
                <tr>
                    <th>Brand:</th>
                    <td>{{bag.brand}}</td>
                </tr>
                <tr>
                    <th>Types:</th>
                    <td>{{bag.type}}</td>
                </tr>
                <tr>
                    <th>Color:</th>
                    <td>{{bag.color}}</td>
                </tr>
                <tr>
                    <th>Price:</th>
                    <td>{{bag.price}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>
<script>
export default {
    layout: Layout,
    props: {
        bags: Array
    }
}
</script>

<style scoped>
.card{
    width: 375px;
}

</style>