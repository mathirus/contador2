<template>
<div>
    <header-component></header-component>


    <div id="section-services" class="section appear clearfix gallery" >
        <div class="text-center pad-top40" >
            <h2 class="mar-top40">BLOG</h2>
        </div>

        <b-row>
            <b-col cols="6" class="text-center">
                <p>fddsfdf</p>
            </b-col>
            <b-col cols="6" class="text-center">
                <h3>iva</h3>
                <a href="">primer tema</a><br>
                <a href="">primer tema</a><br>
                <a href="">primer tema</a>

                <h3>ganancias</h3>
                <a href="">tema dsffd</a><br>
                <a href="">tema dsffd</a><br>
                <a href="">tema dsffd</a>
            </b-col>

        </b-row>

    </div>


</div>
</template>

<script>
    import Vue from 'vue'
    import BootstrapVue from "bootstrap-vue"
    import "bootstrap/dist/css/bootstrap.min.css"
    import "bootstrap-vue/dist/bootstrap-vue.css"

    Vue.use(BootstrapVue)
    export default {
        name: "blog-component"
    }
</script>

<style scoped>

</style>
