<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New store</title>
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/jquery.bxslider.min.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<div class="row" style="display inline">
<ul class="hr">
    <li>Кошельки</li>
    <li>Сумки</li>
    <li>Рюкзаки</li>
    <li>Дорожные сумки</li>
    <li>Дипломаты</li>
</ul>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-8">
        <ul class="bxslider">
            <li><img src="images/4pzcAhrpozo.jpg"/></li>
            <li><img src="images/_lsdaXUYuzs.jpg"/></li>
            <li><img src="images/0PoHeXOqPAA.jpg"/></li>
            <li><img src="images/5VK3t7mjoVw.jpg"/></li>
        </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col xs-12" style="min-height: 200px;  background-color: #1b6d85">
            <img src="images/0PoHeXOqPAA.jpg">
            <img src="images/4pzcAhrpozo.jpg">

        </div>

        <div class="col xs-12 " style="min-height: 150px;  background-color: #3e8f3e">
            <img src="images/5VK3t7mjoVw.jpg">
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $('.bxslider').bxSlider();
    });
</script>

</body>

</html>
