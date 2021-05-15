<!DOCTYPE html>
<html lang="es">
<title>TEA</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Añadimos la libreria animate -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

<link href="{{asset('css/app.css')}}" rel="stylesheet">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
.header-page{
    background-color: #8836f4;
    padding-bottom: 4rem;
    padding-top: 4rem;
    margin-bottom: 4rem;
    color: white;
    font-weight: bold;
}
.btn-theme{
    background-color:#36c8f4;
    color:white;
}
.img{
    width:100%;
}
.img-about{
    width:700px;
    text-align: center;
}
</style>
<body>
<div id="app" >
    <!-- Navbar -->
    <div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="#"  @click="menu=0" class="w3-bar-item w3-button w3-padding-large w3-hover-white" v-bind:class="{ 'w3-white': menu==0}">Informacion</a>
        <a href="#" @click="menu=1" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" v-bind:class="{ 'w3-white': menu==1}">contenido</a>
        <a href="#" @click="menu=2" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" v-bind:class="{ 'w3-white': menu==2}">ayuda</a>
        <a href="#" @click="menu=3" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" v-bind:class="{ 'w3-white': menu==2}">comunidad para padres</a>
        <a href="#" @click="menu=4" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" v-bind:class="{ 'w3-white': menu==2}">Conociendo mis derechos</a>
        <a href="#" @click="menu=5" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" v-bind:class="{ 'w3-white': menu==2}">mision y vision</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="#" @click="menu=0" class="w3-bar-item w3-button w3-padding-large">informacion</a>
        <a href="#" @click="menu=1" class="w3-bar-item w3-button w3-padding-large">contenido</a>
        <a href="#" @click="menu=2" class="w3-bar-item w3-button w3-padding-large">ayuda</a>
        <a href="#" @click="menu=3" class="w3-bar-item w3-button w3-padding-large">comunidad para padres</a>
        <a href="#" @click="menu=4" class="w3-bar-item w3-button w3-padding-large">conociendo mis derechos</a>
        <a href="#" @click="menu=5" class="w3-bar-item w3-button w3-padding-large">mision y vision</a>

    </div>
    </div>
    <!--Contenido dinamico que irá cambiando sin refrescar la pagina-->
    <div>
        @yield('content')
    </div>
    <!-- Footer -->
  
</div>
<script src="js/app.js"></script>
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
