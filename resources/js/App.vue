<template>

<div>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/LOGO.png')}}" width="150" alt="" loading="lazy">
            </a>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="">Información</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="contenido">Contenido</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ayuda">Ayuda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="comunidad">Comunidad para Padres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="derechos">Conociendo mis Derechos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="mision">Misión y Visión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="py-4">
<div class="container">
<router-view></router-view>
    </div>
    </main>
</div>
</template>
