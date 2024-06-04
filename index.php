<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <!--Bootstrap JS-->
    <script src="js/bootstrap.min.js" defer></script>
    <title>Template WordPress</title>
</head>

<body>
    <!--Start Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
                Bootstrap
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-center href=" #">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center href=" #">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center href=" #">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center href=" #">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center href=" #">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <!--Star Suscribe-->
    <div class="container-fluid suscribe d-flex flex-column justify-content-center aling-items-center">
        <div class="text-center text-white">
            <h1 class="display-4">Suscribete</h1>
        </div>
        <form class="row g-3 row-cols-md-auto justify-content-center">
            <div class="col-12">
                <input type="text" placeholder="Nombre" class="form-control">
            </div>
            <div class="col-12">
                <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
    <!--End Suscribe-->

    <!--Start Content-->
    <div class="container my-5">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <!--Start Articulo-->
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/seed/picsum/940/788"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Card title</h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> Date / Category / Autor </small>
                    </div>
                </div>
            </div>
            <!--End Articulo-->
            <!--Start Articulo-->
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/seed/picsum/940/788"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Card title</h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> Date / Category / Autor </small>
                    </div>
                </div>
            </div>
            <!--End Articulo-->
            <!--Start Articulo-->
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/seed/picsum/940/788"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Card title</h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> Date / Category / Autor </small>
                    </div>
                </div>
            </div>
            <!--End Articulo-->
            <!--Start Articulo-->
            <div class="col">
                <div class="card shadow-sm">
                    <img class="card-img-top img-fluid" src="https://picsum.photos/seed/picsum/940/788"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"> Card title</h5>
                        <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> Date / Category / Autor </small>
                    </div>
                </div>
            </div>
            <!--End Articulo-->
        </div>
    </div>
    <!--End Content-->

    <!--Start Footer-->
    <div class="container-fluid bg-dark text-white py-3">
        <div class="container text-center">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque odit rerum eligendi provident ab adipisci
                corrupti iure voluptatibus fugiat? Eligendi aut pariatur blanditiis cupiditate repellendus, nemo illum
                consequuntur suscipit iste.</p>
        </div>
    </div>
    <!--End Footer-->
</body>

</html>