<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>MENU</title>

</head>

<body>
    <h1 id="menu">MENU PAGE</h1>
    <div class="container center">
        <form action="menu.php" method="get">
            <div class="row">
                <div class="card col-3">
                    <img src="/img/Espresso.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="card-title" id="descrip-menu">Espresso</h5>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title" id="descrip-menu">60</h5>
                            </div>
                        </div>
                    </div>
                    <!-- quantity button -->
                    <input type="number" class="count" name="qty1" value="0" min="0">
                </div>
                <div class="card col-3">
                    <img src="/img/Milkshake.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="card-title" id="descrip-menu">Milkshake</h5>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title" id="descrip-menu">75</h5>
                            </div>
                        </div>
                    </div>
                    <!-- quantity button -->
                    <input type="number" class="count" name="qty2" value="0"  min="0">
                </div>
                <div class="card col-3">
                    <img src="img/Smoothie.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="card-title" id="descrip-menu">Smoothie</h5>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title" id="descrip-menu">80</h5>
                            </div>
                        </div>
                    </div>
                    <!-- quantity button -->
                    <input type="number" class="count" name="qty3" value="0"  min="0">
                </div>
            </div>

            <div class="row">
                <div class="card col-3">
                    <img src="/img/Coffeecake.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="card-title" id="descrip-menu">Coffee Cake</h5>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title" id="descrip-menu">50</h5>
                            </div>
                        </div>
                    </div>
                    <!-- quantity button -->
                    <input type="number" class="count" name="qty4" value="0"  min="0">
                </div>
                <div class="card col-3">
                    <img src="/img/Pancake.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="card-title" id="descrip-menu">Pancake</h5>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title" id="descrip-menu">65</h5>
                            </div>
                        </div>
                    </div>
                    <!-- quantity button -->
                    <input type="number" class="count" name="qty5" value="0"  min="0">

                </div>
                <div class="card col-3">
                    <img src="/img/Donut.jpg" class="card-img-top">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <h5 class="card-title" id="descrip-menu">Donut</h5>
                            </div>
                            <div class="col-sm-3">
                                <h5 class="card-title" id="descrip-menu">40</h5>
                            </div>
                        </div>
                    </div>
                    <!-- quantity button -->
                    <input type="number" class="count" name="qty6" value="0"  min="0">
                </div>
            </div>
            <button type="submit" class="btn btn-success" style="font-size: 25px;">Submit!</button>
        </form>
    </div>


    <style>
        body {
            background-color: antiquewhite;
            margin: 0;
            padding: 0;
        }

        .card {
            margin: 5% 4% 2% 4%;
            border-radius: 10%;
        }

        button {
            margin: 3% 0% 3% 85%;
            width: 7rem;
            height: 3rem;
        }

        h4 {
            margin-top: 10%;
            margin-bottom: 1%;
        }

        #menu {
            font-size: 40px;
            text-align: center;
            margin-top: 3%;
        }

        .count {
            margin: 2% 25% 7% 25%;
            width: 50%
        }

        .card-body {
            padding-top: 10%;
        }

        .card-img-top {
            border-radius: 10% 10% 10% 10%;
            margin: 6% 0% 0% 0%;
        }
    </style>

</body>

</html>
