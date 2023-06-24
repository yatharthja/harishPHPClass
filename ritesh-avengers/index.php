<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ritesh-Avengers</title>
</head>

<body>
    <!-- header starts here -->
    <header>
        <div class="head_logo">
            <img class="logo" src="./assets/img/Avengers_logo_PNG1.png" alt="" srcset="">
        </div>
        <ul class="header_heads">
            <li>
                <a href="./index.html">
                    <div class="head-main">Home</div>
                </a>
            </li>
            <li>
                <a href="./character.html">
                    <div class="head-main">Characters</div>
                </a>
            </li>
            <li>
                <div class="head-main">Marvel</div>
            </li>
            <li>
                <div class="head-main">About Us</div>
            </li>
        </ul>
    </header>
    <!-- header ends here -->
    <!-- main start -->
    <div class="slider">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1500">
                    <img class="main-img" src="./assets/img/captainamerica.jpg" alt="" srcset="">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img class="main-img" src="./assets/img/ironman.jpg" alt="" srcset="">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img class="main-img" src="./assets/img/hulk.jpg" alt="" srcset="">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img class="main-img" src="./assets/img/thor.jpg" alt="" srcset="">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img class="main-img" src="./assets/img/hawkeye.jpg" alt="" srcset="">
                </div>
                <div class="carousel-item" data-bs-interval="1500">
                    <img class="main-img" src="./assets/img/natasha.jpg" alt="" srcset="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- main end -->
    <!-- marvel start -->
    <div>
        <hr>
        <h1 class="marvel">MARVEL MOVIES</h1>
        <hr>
        <div class="main-cards">
            <div class="card">
                <img class="card-img-top" src="./assets/img/avenger-endgame.avif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./assets/img/the-avengers.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="./assets/img/age-of-ultron.avif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="main-cards">
        <div class="card">
            <img class="card-img-top" src="./assets/img/captain-america.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="./assets/img/ironman.webp" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="./assets/img/civil war.jpeg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <hr>
    <!-- marvel end -->
    <!-- footer start -->
    <h1 class="sign-up">Sign Up</h1><hr>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="footer-form">
                        <div class="form-group">
                            <label class="form-label" for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="form-label">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <img class="logo-footer" src="./assets/img/Avengers_logo_PNG1.png" alt="" srcset=""><hr>
                    <img class="web-logo" src="./assets/img/twitter.png" alt="" srcset="">
                    <img class="web-logo" src="./assets/img/facebook.webp" alt="" srcset="">
                    <img class="web-logo" src="./assets/img/Instagram.webp" alt="">
                    <img class="web-logo" src="./assets/img/watsapp.png" alt="" srcset="">
                    <img class="web-logo" src="./assets/img/Messenger.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>

</html>