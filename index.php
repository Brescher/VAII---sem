<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styl.css">
</head>
<?php include "nav.php" ?>
<body>

<div class="container">
    <div id="carousel" class="carousel slide w-100 h-50" data-ride="carousel" style="margin: auto;">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/battlepass.jpg" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>3. sezóna battle pasu.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/recruitAFriend.jpg" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Naverbujte priateľov a získajte skvelé prémiové odmeny.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/veteranDay.jpg" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Uctime si deň vojnových veteránov s novembrovými tank rewards.</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</body>
</html>

