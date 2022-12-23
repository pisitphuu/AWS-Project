<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2nd page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body class='bgcolor'>
    <div class="container" style="margin-bottom:30px">
        <h1 class="title">Order History 🧾</h1>
    </div>
    <?php

    $servername = 'louistuinui-db-cluster-instance-1.cjyfegh7fhqe.us-east-1.rds.amazonaws.com';
    $username = 'admin';
    $password = 'louislnwza1234';
    $dbname = 'order_item';

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

    if (!$conn) {
        die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)" . mysqli_connect_error());
    } else {
        echo "<script>console.log('Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)');</script>";
    }

    $check = "SELECT * FROM order_item";
    $result = $conn->query($check);
    $chack_on = array(0);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($chack_on, $row["order_number"]);
        }
    }

    $qty1 = $_GET["qty1"];
    $qty2 = $_GET["qty2"];
    $qty3 = $_GET["qty3"];
    $qty4 = $_GET["qty4"];
    $qty5 = $_GET["qty5"];
    $qty6 = $_GET["qty6"];

    ?>


    <?php

    $price1 = $qty1 * 60;
    //echo "<div class='details'><h6>Espresso : x" . $qty1 . " $" . $price1 . "<br>";

    $price2 = $qty2 * 75;
    // echo "Milkshake : x" . $qty2 . " $" . $price2 . "<br>";

    $price3 = $qty3 * 80;
    //echo "Smoothie : x" . $qty3 . " $" . $price3 . "<br>";

    $price4 = $qty4 * 50;
    //echo "Coffee Cake : x" . $qty4 . " $" . $price4 . "<br>";

    $price5 = $qty5 * 65;
    //echo "Pancake : x" . $qty5 . " $" . $price5 . "<br>";

    $price6 = $qty6 * 40;
    //echo "Donut : x" . $qty6 . " $" . $price6 . "<br></h6></div><div class='line'></div>";

    $all_qty = array($qty1, $qty2, $qty3, $qty4, $qty5, $qty6);
    $all_price = array($price1, $price2, $price3, $price4, $price5, $price6);
    $total = array($price1, $price2, $price3, $price4, $price5, $price6);
    $total = array_sum($total);
    $product = array("Espresso", "Milkshake", "Smoothie", "Coffee Cake", "Pancake", "Donut",);
    $on = 0;

    echo "<br> <h4 class='total'>Recently Total : $" . number_format($total, 2) . " 💵</h4></div>";

    $on = max($chack_on);
    $on += 1;

    if ($pageWasRefreshed) {
        echo "<script>console.log('Reload web');</script>";
    } else {
        //Add Items
        for ($i = 0; $i <= 5; $i++) {
            if ($all_qty[$i] != 0) {
                $sql = "
        INSERT INTO order_item (order_number, product_name, quantity, total)
        VALUES ($on, '$product[$i]' ,'$all_qty[$i]','$all_price[$i]');
        ";
                $objQuery = mysqli_query($conn, $sql);
                if ($objQuery) {
                    echo "<script>console.log('New record Inserted successfully [$i]');</script>";
                } else {
                    echo "Error : Input";
                }
            }
        }
    }


    ?>


    <div class="container" style="margin-top:30px">
        <h2>History</h2>
        <table class"table rounded" style="border: 1px solid black; border-radius: 50px;">
            <tr>
                <th class="bgth">No.</th>
                <th class="bgth">Product</th>
                <th class="bgth">Quantity</th>
                <th class="bgth">Total</th>
            </tr>
            <?php
            $check = "SELECT * FROM order_item";
            $result = $conn->query($check);
            $check_order = 1;
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    if ($row['order_number'] == $check_order) {
                        echo "<tr>";
                        echo "<td>" . $row['order_number'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . $row['total'] . "</td>";
                        echo "</tr>";
                    } else {
                        echo '<th class="bgth">No.</th>
            <th class="bgth">Product</th>
            <th class="bgth">Quantity</th>
            <th class="bgth">Total</th>
            </tr>';
                        echo "<tr>";
                        echo "<td>" . $row['order_number'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['quantity'] . "</td>";
                        echo "<td>" . $row['total'] . "</td>";
                        echo "</tr>";
                        $check_order = $row['order_number'];
                    }
                }
            }

            mysqli_close($conn); // ปิดฐานข้อมูล
            ?>
        </table>


        <div class="button d-flex justify-content-start" style="margin-top:20px">
            <a href="index.php" class="textb">
                <button class="btn btn-success" style="text-align:center">
                    <span>Back</span>
                </button>
            </a>
            <form method="post" class="textb">
                <input type="submit" name="button1" value="Reset" class="btn btn-danger" />
            </form>
            <?php

            if (isset($_POST['button1'])) {
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                $sql = "DELETE FROM order_item;";
                $objQuery = mysqli_query($conn, $sql);
                mysqli_close($conn); // ปิดฐานข้อมูล
                header("Refresh:0");
            }
            ?>
        </div>
    </div>

    <script>

    </script>

    <style>
        .textb {
            position: relative;
            padding: 10px;
        }

        .line {
            position: relative;
            left: 25%;
            width: 50%;
            height: 2px;
            top: 10px;
            margin-bottom: 10px;
            margin-top: 10px;
            background-color: black;
        }

        .details {
            position: relative;
            top: 10px;
            text-align: center;
        }

        .total {
            position: relative;
            text-align: center;
            color: red;
        }

        .title {
            padding-top: 5%;
            margin-bottom: 2%;
            text-align: center;
        }

        .bgcolor {
            background-color: antiquewhite;
        }

        .btn {
            position: relative;
            top: 10px;
        }


        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius: 20px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;


        }

        td {
            background-color: white;
        }

        .bgth {
            background-color: #defdfd;
        }
    </style>
</body>

</html>