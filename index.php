<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MC Kangkung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg bg-success navbar-dark bg-gradient sticky-top">
        <div class="container">
            <a class="navbar-brand fs-3 fst-italic" href="?page=home">MC Kangkung</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-6" aria-current="page" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="?page=monitoring">Monitoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="?page=controlling">Controlling</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="?page=about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End-Header -->

    <!-- Content -->
    <div class="container m-5">
        <?php
        include 'page.php';
        ?>
    </div>
    <!-- End-Content -->

    <!-- Footer -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 m-4 sticky-bottom">
        <div class="col-md-4 d-flex align-items-center sticky-bottom">
            <span class="mb-3 mb-md-0 text-body-secondary">Copyright&copy;2023 by Edy Prastyo </i></span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex sticky-bottom">
            <li class="ms-3"><a class="text-body-secondary" href="https://twitter.com/prast_yo_"><img src="./assets/img/twitter.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="twitter">
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.instagram.com/prast.yo_/"><img src="./assets/img/instagram.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="instagram">
                </a></li>
            <li class="ms-3"><a class="text-body-secondary" href="https://www.facebook.com/prastedy2611"><img src="./assets/img/facebook.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="facebook">
                </a></li>
        </ul>
    </footer>
    <!-- End-Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>