<?php
include('connection1.php');
?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <title>Form</title>
    <style>
        table {
            display: flex;
            /* align-items: center; */
            justify-content: center;
            margin: 5% 20% 20%;
        }

        th,
        td {
            /* border: 1px solid black; */
            border-collapse: collapse;
            padding: 10px;
        }
        tr{
            font-size: 1.5rem;
            text-align: center;
        }
        tr.row{
            color:#777;
        }
        div.clid{
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
        }
        a {
            color: #fff;
            text-decoration: none;
        }

        button {
            margin: 0 50px;
            border: none;
            padding: 12px 25px;
            background: #222;
        }

        button:hover {
            background: #8e44ad;
        }
    </style>
</head>

<body>

    <!-- header section starts  -->

    <section class="header">

        <a href="index.php" class="logo">travel.</a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
        <h1>Reserve</h1>
    </div>


    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Where to</th>
            <th>How Many</th>
            <th>Arrivals</th>
            <th>Leaving</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <?php
        $check = $_SESSION['check'];
        $sql = "SELECT * FROM book WHERE ID = '$check'";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['ID'];
                $name = $row['Name'];
                $address = $row['Address_'];
                $visit = $row['Where_to'];
                $how_many = $row['How_many'];
                $arrival = $row['Arrival'];
                $leaving = $row['Leaving'];
                $email = $row['Email'];
                $phone = $row['Phone'];
                echo '<tr class="row">
                            <td>' . $name . '</td>
                            <td>' . $address . '</td>
                            <td>' . $visit . '</td>
                            <td>' . $how_many . '</td>
                            <td>' . $arrival . '</td>
                            <td>' . $leaving . '</td>
                            <td>' . $email . '</td>
                            <td>' . $phone . '</td>
                        </tr>';
            }
        } session_destroy();
        ?>

    </table>
    <div class="clid">
        <?php
        if ($id == null)
        {
            header('location: book.php');
        }
        else
        {
            echo '<button><a href="update.php? updateid='.$id.'">Update</a></button>
            <button><a href="delete.php? deleteid='.$id.'">Delete</a></button>';    
        }
        ?>    
    </div>

    <!-- footer section starts  -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="login.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> afghan@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> kabul, Afg </a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>mr. Wasil</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->



    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>