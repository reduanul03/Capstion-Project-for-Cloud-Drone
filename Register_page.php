<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Comapatible" content="IE=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

        <!---Navigation BAR just for main page-->
        <header>
            <h2 class="logo">Cloud Drone</h2>
            <nav class="navigation">
                <button class="buttonnav"><a href="Register_page.php">Register</a></button>
                <button class="buttonnav"><a href="login_page.php">Login</a></button>
            </nav>
                </header>
    <!-----Register PAGE----->
    <div class="finisher">
        <div class="form-box login">
            <h2>Registration</h2>
            <form action="includes/signup.inc.php" method="post">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text"  name="username" required>
                    <label for="">User Name</label>
                </div>


                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="call"></ion-icon></span>
                    <input type="number" name="number" required>
                    <label for="">Mobile Number</label>
                </div>



                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="pwd" required>
                    <label for="">Password</label>
                </div>

                
                <div class="input-box">
                    <span class="icon"><ion-icon name="keypad"></ion-icon></span>
                    <input type="password" name="repwd" required>
                    <label for="">Retype Password</label>
                </div>


                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" required>I have already read the agree with terms and conditions
                    </label>
                </div>
                <button type="submit" class="login-button">
                    Register
                </button>
                <div class="login-register">
                    <p>Already have an account?
                        <a href="login_page.php" class="register-link">
                            Login
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <?php
check_signup_errors();

?>
        <!-- Copyright-->
        <div class="copyright">
            Copyright 2024 &copy; <strong><a href="#" target="_blank">Team Cloud</a></strong>
          </div>
          <!-- back to top -->
<a href="#" class="back-to-top"><ion-icon name="arrow-up"></ion-icon></a>



<script src="js/script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
</body>

</html>