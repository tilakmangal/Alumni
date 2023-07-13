<?php
$err = 0;
if (count($_POST)) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $connect = mysqli_connect('localhost', 'root', 'root', 'alumni');
    $query = "SELECT * FROM login WHERE username = '{$username}' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    print_r($result);
    if (mysqli_num_rows($result) == 1) {
        $record = mysqli_fetch_assoc($result);
        mysqli_query($connect, "DELETE from temp");
        $query = "INSERT into temp values ('{$record['Alum_id']}')";
        mysqli_query($connect, $query);
        header('Location: profile.php');
    } else {
        $err++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Information</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity=""></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f9eecfe58.js" crossorigin="anonymous"></script>
</head>

<body>
    <section id="title">

        <div class="container-fluid">
            <!-- Nav Bar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="">MANIT</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#footer">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>




            <!-- Title -->

            <div class="row">
                <div class="col-lg-6">
                    <h1>Welcome to one<br> of the leading institutions of<br> national importance<br> in technical
                        education.</h1>
                </div>
                <div class="col-lg-6">
                    <img class="title-image" src="MNIT-BHOPAL.jpg" alt="">
                </div>
            </div>

        </div>

    </section>

    <section id="features">
        <div class="row">
            <div class="feature-box col-lg-4">
                <i class="fa-solid fa-book-open-reader fa-4x"></i>
                <h3>Makes Study easier.</h3>
                <p>The hard work of our faculties makes studies easier.</p>
            </div>
            <div class="feature-box col-lg-4">
                <i class="fa-solid fa-medal fa-4x"></i>
                <h3>Sports Activity</h3>
                <p>Conducts many compititions to encourage sports activities.</p>
            </div>
            <div class="feature-box col-lg-4">
                <i class="fa-sharp fa-solid fa-music fa-4x"></i>
                <h3>Cultural Activities</h3>
                <p>Our biggest cultural fest "Maffick" includes music, dance and loads of fun.</p>
            </div>
        </div>

    </section>

    <section id="About">

        <div id="About-carousel" class="carousel slide" data-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h2>Maulana Azad National Institute of Technology (MANIT) is one of the leading institutions of
                        national importance in technical education.</h2>
                    <img class="Manit-image" src="MNIT-BHOPAL.jpg" alt="">
                    <em>Main Building</em>
                </div>
                <div class="carousel-item">
                    <h2 class="about-text">It has a very beautiful sports club which includes all the games.</h2>
                    <img class="Manit-image" src="sportsclub.jpg" alt="">
                    <em>Sports Club</em>

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#About-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#About-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

        </div>

    </section>

    <section id="login">
        <h3 class="login-heading">Alumini Login</h3>
        <form method="post">
            <label>User_Name:</label>
            <input type="text" name="username" value=""><br>
            <br><label>Password:</label>
            <input type="password" name="password"><br>
            <br><button type="submit" class="btn btn-dark btn-lg "><i class="fa-solid fa-right-to-bracket"></i><a class="">Submit</a></button><br>
        </form>
        <?php
        if ($err > 0) {
            echo 'Invalid Credentials';
        }
        ?>
    </section>

    <footer id="footer">
        <h3>For any queries contact us on:</h3>
        <li><i class="fa-regular fa-phone"></i> contact no: 91-0731622582</li>
        <li>email: manit5869@gmail.com</li>
        <i class="social-icon fa-brands fa-twitter fa-2x"></i>
        <i class="social-icon fa-brands fa-facebook fa-2x"></i>
        <i class="social-icon fa-brands fa-instagram fa-2x"></i>
        <i class="social-icon fa-regular fa-envelope fa-2x"></i>
        <p>© Copyright MANIT</p>

    </footer>

</body>

</html>