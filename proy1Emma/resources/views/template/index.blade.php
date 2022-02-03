<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>PROY MAR</title>
</head>

<body>
    <header class="mt-0 pt-0">
        <div class="bg-cover clearfix pt-3">
            <h2 class="logo">PROY MAR</h2>
            <input type="text" id="nav-search" class="nav-search mx-auto" name="" class="form-control">
            <div class="ml-0 mr-0 pb-1">
                <nav class="navbar navbar-expand-md">

                    <button class="navbar-toggler ml-auto" data-target="#my-nav" data-toggle="collapse"
                        aria-controls="my-nav" aria-expanded="false" onclick="myFunction(this)"
                        aria-label="Toggle navigation">
                        <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
                    </button>
                    
                </nav>
            </div>
        </div>

        <div class="row ml-0 mr-0">
            <div class="col-md-6 pr-0">
                <div class="card">
                    <img class="card-img" src="/images/rapsus1.jpg" alt="">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <hr />
                        <h2>mi musica favorita</h2>
                            <a href="{{route('musica')}}">LEER MAS</a> 
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="card">
                    <img class="card-img" src="/images/mar4.jpg" alt="">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <hr />
                        <h2>sobre mi</h2>
                           <a href="{{route('sobre_mi')}}">LEER MAS</a> 
                    </div>
                </div>
            </div>

            <div class="col-md-3 pr-0 first">
                <div class="card">
                    <img class="card-img" src="/images/architecture.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Architecture</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="/images/interior.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Interior</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 pr-0">
                <div class="card">
                    <img class="card-img" src="/images/food.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Food</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 pl-0 last">
                <div class="card">
                    <img class="card-img" src="/images/travel.png" alt="">
                    <div class="card-img-overlay">
                        <h5>Travel</h5>
                    </div>
                </div>
            </div>
        </div>

    </header>


    </footer>

    <script src="/js/popper.min.js"></script>
    <script src="/js/jquery-1.12.0.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.yu2fvl.js"></script>
    <script src="/js/main.js"></script>

</body>

</html>