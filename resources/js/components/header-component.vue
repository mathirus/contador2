<template>
    <div>
        <b-navbar toggleable="lg" type="dark" id>
            <b-container>
                <b-navbar-toggle target="nav-collapse">

                </b-navbar-toggle>


                <b-navbar-brand href="#">
                    <img src="/img/brand2.jpg">

                </b-navbar-brand>

                <b-collapse id="nav-collapse" is-nav class="text-center">
                    <b-navbar-nav  fill class="ml-auto" >
                        <b-navbar-brand href="#header">Inicio</b-navbar-brand>
                        <b-navbar-brand href="#section-trabajo"> Como Trabajamos</b-navbar-brand>
                        <b-navbar-brand href="#section-services">Servicio</b-navbar-brand>
                        <b-navbar-brand href="#section-contact">Contacto</b-navbar-brand>
                        <b-navbar-brand href="#">Blog</b-navbar-brand>
                        <b-navbar-brand href="#section-contact">Videos</b-navbar-brand>

                    </b-navbar-nav>

                    <!-- Right aligned nav items -->

                </b-collapse>


            </b-container>
        </b-navbar>
    </div>
</template>

<script>
    export default {
        name: "header-component"
    }
</script>

<style scoped>
    .navbar{
        background-color:rgba(24, 101, 143, 0.7);
        margin-bottom:0px;
        min-height:70px;
    }
    .b-nav-item{
        font-size:40px;
        line-heigth:40px;
    }
    .img{
        width: 100%;
        height: 100%;

    }
    .b-navbar-brand img{
        width: 100%;
        max-width: 1920px;
    }

</style>
