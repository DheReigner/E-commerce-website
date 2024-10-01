<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Google tag (gtag.js)-->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-M1DXJ2F7EQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-M1DXJ2F7EQ');
    </script>-->
    <!-- Google Tag Manager -->
    <!-- <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P5XNKQGN');
    </script>-->
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE WEBSITE USING PHP AND MYSQL</title>
    <!-- bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file link -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5XNKQGN"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>-->
    <!-- End Google Tag Manager (noscript) -->
    <!-- navbar -->
    <div class="container_fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg bg-info">
            <div class="container-fluid">
                <img src="https://e7.pngegg.com/pngimages/397/656/png-clipart-shopping-cart-computer-icons-online-shopping-the-grocery-store-name-card-supermarket-vehicle.png" alt="" class="logo" width="50" height="50">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price:100/=</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li> -->
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- second child -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </nav>

        <!-- third child -->
        <div class="bg-light">
            <h3 class="text-center">Dhe Reingers Hardware</h3>
            <p class="text-center">⚒ Building Strong Foundations, One Tool at a Time 🛠</p>

        </div> <!-- fourth child -->
        <div class="row">
            <div class="col-md-10">
                <!-- products -->
                <div class="row">
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=" https://i.ytimg.com/vi/IxezUuoyREc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLA6OYCePtPv0m1pM98peWYUsA8M_Q " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=" https://reviewed-com-res.cloudinary.com/image/fetch/s--WUmC-u4K--/b_white,c_limit,cs_srgb,f_auto,fl_progressive.strip_profile,g_center,q_auto,w_972/https://reviewed-production.s3.amazonaws.com/1721055500879/Hero-20240711_CordlessDrillsTBRNHeroV4_Renzi.PNG " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=" https://m.media-amazon.com/images/I/91pXzeIlp+L._AC_UF894,1000_QL80_.jpg " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=" https://m.media-amazon.com/images/I/91pXzeIlp+L._AC_UF894,1000_QL80_.jpg " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=" https://m.media-amazon.com/images/I/91pXzeIlp+L._AC_UF894,1000_QL80_.jpg " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img src=" https://m.media-amazon.com/images/I/91pXzeIlp+L._AC_UF894,1000_QL80_.jpg " class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to cart</a>
                                <a href="#" class="btn btn-secondary">View more</a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

            <!-- sidenav -->
            <div class="col-md-2 bg-secondary p-0">
                <!-- brands to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h4>Delivery Brands </h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Brand 1</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Brand 2</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Brand 3 </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Brand 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"> Brand 5</a>
                    </li>
                </ul>

                <!-- categories to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h4>Categories </h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light"> Categories 1 </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Categories 2 </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Categories 3</a>

                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light ">Categories 4</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-light">Categories 5</a>
                    </li>
                </ul>


            </div>
        </div>
    </div>













    <!-- last child -->
    <div class="bg-info p-3 text-center">
        <p>All rights reserved © Designed by Martoh-2024</p>
    </div>
    </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>