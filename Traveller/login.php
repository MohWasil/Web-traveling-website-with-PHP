<?php
    require_once('connection.php');
    session_start();
    if(isset($_POST['submit']))
    {
        $error = '';
        $Email = $_POST['email'];
        $Password = $_POST['password'];
        $CheckEmail = "SELECT Email FROM registration WHERE Email = '$Email'";
        $QC1 = mysqli_query($connect, $CheckEmail);
        $CheckPassword = "SELECT Password FROM registration WHERE Password = '$Password'";
        $QC2 = mysqli_query($connect, $CheckPassword);
        $result1 = mysqli_fetch_column($QC1);
        $result2 = mysqli_fetch_column($QC2);
        if ($Email == $result1 and $Password == $result2)
        {
            $_SESSION['log_in'] = true;
            header('location: book.php');
        }
        else
        {
            $error = 'Login field';
        }
        mysqli_close($connect);
    }
?>


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
        div.form{
            background: #fff9;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            margin: 55px 30px;
            background-color: #eee;
            padding: 10% 20%;
            border-radius: 5px;
            color: #777;
        }
        label{
            font-size: 1.5rem;
        }
        input{
            width: 100%;
            padding:1.2rem 1.4rem;
            font-size: 1.6rem;
            color:var(--light-black);
            text-transform: none;
            margin: 1.5rem 0;            
        }
        input:focus{
            background: #222;
            color: #fff;        }
        
        button{
            background-color: #222;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            color: #fff;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        button:hover{
            background: #8e44ad;
        }
        a{
            text-decoration: none;
            color: #777;
            font-size: 1.5rem;
        }
        a:hover{
            color: #8e44ad;
        }
        p.error{
            margin-top: 12px;
            color: red;
            font-weight: bold;
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
    <a href="login.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <!-- header section ends -->

    <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
    <h1>Sign in now</h1>
    </div>


    <div class="form">
    <form action="" method="post">
        <label for="">Email:</label> 
        <input type="email" name="email" placeholder="Enter Your Email"> 
        <label for="">Password:</label> 
        <input type="password" name="password" placeholder="Enter Your Password"> 
        <button value="Sign in" name="submit">Sign in</button> <br>
        <a href="logup.php">Sign up</a> <br>
        <p class="error"><?php if (isset($_POST['submit'])){ echo $error; }?></p>
    </form>
    </div>



    <!-- footer section starts  -->
    <section class="footer">

        <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
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