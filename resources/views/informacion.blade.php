<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-main">
        <div class="container p-4">
            <a class="navbar-brand m-auto" href="#">
                <img src="{{asset('images/LOGO.png')}}" width="200" alt="" loading="lazy">
            </a>
        </div>
    </nav>   
<section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>Información</h1>
                <hr>
                <img src="images/autismo.jpg" width="800" alt="Post Javascript" class="img-fluid">
                <p class="text-left">
                El objetivo de esta web app es brindar 
                ayuda a los adolescentes que padezcan 
                del Trastorno del Espetro Autista (TEA) 
                haciendo uso de herramientas digitales como 
                audio, video, imágenes y sonidos, que brinden 
                conocimientos necesarios que ayuden en la 
                integración social y digital de estas personas.
                </p>
            </div>
        </div>
    </section>
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
           
            <div class="col-12 text-center">
                <h2>Mas informacion acerca de autismo</h2>
                <hr class="post-hr">
            </div>
            
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/au1.jpg')}}" alt="Post Python">
                    <div class="card-body">
                        <h5 class="card-title my-2">Aun no definido</h5>
                        <div class="d-card-text">
                        Esta informacion aun no esta disponible para mostrar
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/au2.jpg')}}" alt="Post Python">
                    <div class="card-body">
                        <h5 class="card-title my-2">Aun no definido</h5>
                        <div class="d-card-text">
                        Esta informacion aun no esta disponible para mostrar
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('images/au3.jpg')}}" alt="Post Python">
                    <div class="card-body">
                        <h5 class="card-title my-2">Aun no definido</h5>
                        <div class="d-card-text">
                            Esta informacion aun no esta disponible para mostrar
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>