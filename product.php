<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fontawesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        h1 {
            text-align: center;
            font-size: 35px;
            font-weight: 700;
            text-shadow: 0px 1px 1px black;
            text-decoration: underline;
        }

        /* product start  */
        .packages .card {
            border-radius: 5px;
            border: none;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
            background: #73C6B6;
        }

        .packages .card img {
            border-radius: 5px;
        }

        .packages .card .card-body {
            background: transparent;
        }

        .packages .card .card-body h3 {
            font-size: 25px;
            font-weight: 600;
        }

        .checked {
            color: #ffa550;
        }

        .star i {
            font-size: 15px;
        }

        .packages .card .card-body h6 {
            font-size: 20px;
        }

        .packages .card .card-body a {
            padding: 10px;
            text-decoration: none;
            background: #2ECC71;
            color: white;
            border-radius: 5px;
        }

        /* products end  */
    </style>
</head>

<body>
    <h1><span style="color: #2ECC71;">O</span>ur Pr<span style="color: #ffa500;">o</span>duct</h1>
    <section class="packages mb-5" id="packages">
        <div class="container">
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <form action="" method="post">
                        <div class="card">
                            <img src="images/bottl1.jpeg" alt="" style="height: 40vh;">
                            <div class="card-body">
                                <h3>Bottle</h3>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                                <h6>Price: <strong>Rs.10,000</strong></h6>
                                <input type="hidden" name="pname" id="" value="Bottle">
                            <input type="hidden" name="price" id="" value="10,000">
                            <input type="hidden" name="qty" id="" value="1">
                                <button type="submit" name="submit"><a href="#">Add To Cart</a></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <form action="" method="post">
                        <div class="card">
                            <img src="images/tent.jpg" alt="" style="height: 40vh;">
                            <div class="card-body">
                                <h3>Tent</h3>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <h6>Price: <strong>Rs.20,000</strong></h6>
                                <input type="hidden" name="pname" id="" value="Tent">
                            <input type="hidden" name="price" id="" value="20,000">
                            <input type="hidden" name="qty" id="" value="1">
                                <button type="submit" name="submit"><a href="#">Add To Cart</a></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <form action="" method="post">
                        <div class="card">
                            <img src="images/jacket.jpg" alt="" style="height: 40vh;">
                            <div class="card-body">
                                <h3>Jacket</h3>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                                <h6>Price: <strong>Rs.8,000</strong></h6>
                                <input type="hidden" name="pname" id="" value="Jacket">
                            <input type="hidden" name="price" id="" value="8,000">
                            <input type="hidden" name="qty" id="" value="1">
                                <button type="submit" name="submit"><a href="#">Add To Cart</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <form action="" method="post">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card">
                            <img src="images/sleepbag.jpg" alt="" style="height: 40vh;">
                            <div class="card-body">
                                <h3>Sleeping Bag</h3>
                                <div class="star">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star "></i>
                                    <i class="fa-solid fa-star "></i>
                                </div>
                                <h6>Price: <strong>Rs.18,000</strong></h6>
                                <input type="hidden" name="pname" id="" value="Sleeping Bag">
                            <input type="hidden" name="price" id="" value="18,000">
                            <input type="hidden" name="qty" id="" value="1">
                               <button type="submit" name="submit">Add To Cart</button>
                            </div>
                        </div>
                </form>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <form action="" method="post">
                    <div class="card">
                        <img src="images/down jacket.jpg" alt="" style="height: 40vh;">
                        <div class="card-body">
                            <h3>Down Jacket</h3>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                            </div>
                            <h6>Price: <strong>Rs.22,000</strong></h6>
                            <input type="hidden" name="pname" id="" value="Down Jacket">
                            <input type="hidden" name="price" id="" value="22,000">
                            <input type="hidden" name="qty" id="" value="1">
                            <button type="submit" name="submit">Add To Cart</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <form action="" method="post">
                    <div class="card">
                        <img src="images/camera1.jpg" alt="" style="height: 40vh;">
                        <div class="card-body">
                            <h3>Camera</h3>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                            </div>
                            <h6>Price: <strong>Rs.27,000</strong></h6>
                            <input type="hidden" name="pname" id="" value="Camera">
                            <input type="hidden" name="price" id="" value="27000">
                            <input type="hidden" name="qty" id="" value="1">
                            <!-- <button type="submit"><a href="#" name="submit">Add To Cart</a></button> -->
                            <button type="submit" name="submit">Add To Cart</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!-- bootstrap js link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        
</body>

</html>

<?php
 if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO `cart` (`name`,`price`,`qty`,`total`) VALUES ('$pname','$price','$qty','$price')";
    $insert = mysqli_query($conn, $sql);
   if($insert){
        echo "<script>
        alert('product added to cart'); 
    </script>";
   }
 }

?>