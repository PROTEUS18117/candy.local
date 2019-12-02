<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
<body class="bg">


<nav class="navbar navbar-expand-lg gradient">

    <img src="./ico/chocolate-chips-muffin_121493.ico" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link white" href="#">Главная <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link white" href="#">Информация</a>
            </li>
        </ul>
        <?php
        $db = mysqli_connect('localhost', 'admin', 'password','candy') or die('Подключение к БД не удалось');
        $query = "SELECT * FROM sweets";
        $result = mysqli_query($db, $query);
        $toys = [];
        while($row = mysqli_fetch_array($result))
        {
            $toys[] = $row;
        }
        ?>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <nav class="navbar navbar-light my-icon">
        <a class="navbar-brand" href="#">
            <img src="./ico/serdce.ico" alt="">
        </a>

    </nav>
    <nav class="navbar navbar-light my-icon">
       <a class="navbar-brand" href="#">
                    <img src="./ico/cart.ico" alt="">
                </a>



    </nav>
</nav>

<div>
    <div class="container">
        <div class="row">
            <div class="col">

            </div>
            <div class="col-12  field  ">
                <div class="position-relative mt-3 text-center  field bear">
                    <div class=" col-4 pl-5">
                        <p class="lead font-weight-bolder  color text-center big">Магазинчик сладостей</p>

                    </div>
                    <div class="product-device shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                </div>
                <div>
                    <div class="container">
                        <div class=" row">
                            <?php foreach ($toys as $toy): ?>
                                <div class="mt-2 col-md-4">
                                    <div class="card opacity">
                                        <img src="img/<?php echo $toy['src']?>" class="card-img-top" alt="Картинка">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $toy['name']?></h5>
                                            <p class="card-text"><?php echo $toy['desk']?></p>
                                            <p class="card-text"><small class="text-muted">Цена: </small><?php echo $toy['price']?> рублей</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>