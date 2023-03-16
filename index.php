<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>planIT</title>

    <link rel="stylesheet" href="https://use.typekit.net/iuz1kyi.css">
                <!-- 
                font-family: poppins, sans-serif;
                font-weight: 200, 300, 400, 700;
                font-style: noraml, italic;


                font-family: mr-eaves-xl-modern, sans-serif;
                font-weight: 200, 300, 400 700;
                font-style: normal, italic;  -->


    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script defer src="javascript/login-animations.js"></script>
    <script defer src="php/login.php"></script>

</head>
<body id="login-body">

    <!-- Logo Section -->
    <div class="logo-section">
        <img src="images/Logo.png" alt="">
    </div>

    <!-- Registration Section -->
    <div class="register-section">

    </div>

    <!-- Login Section -->
    <div class="login-body">
        <div class="login-section">

            <!-- Student Login Cart -->
            <div class="login-cart student-login">
                <div class="student-login-text">
                    <p class="student-button">Ich bin ein Schüler/ eine Schülerin</p>
                </div>

                <div class="login-form-section-student log-form-sec">
                    <form class="login-form" action="" method="post">
                            <input class="input" type="text" name="username" placeholder="Benutzername">
                            <input class="input" type="password" name="password" placeholder="Passwort">
                            <button id="submit-btn" class="input" value="Einloggen" name="submit" type="submit">Einloggen</button>  
                            
                            <small class="registration ">Ich habe noch kein Konto. <a href="">Hier registrieren</a> </small>
                    </form>
                </div>

            </div>

            <!-- Teacher Login Cart -->
            <div class="login-cart teacher-login">
                <div class="teacher-login-text">
                    <p class="teacher-button">Ich bin eine Lehrperson</p>
                </div>

                <div class="login-form-section-teacher log-form-sec">
                    <form class="login-form" action="" method="post">
                            <input class="input" type="text" name="username" placeholder="Benutzername">
                            <input class="input" type="password" name="password" placeholder="Passwort">
                            <button id="submit-btn" class="input" value="Einloggen" name="Submit" type="submit">Einloggen</button>  
                            
                            <small class="registration">Ich habe noch kein Konto. <a href="">Hier registrieren</a> </small>
                    </form>
                </div>
            </div>
        </div>
        <a href="lehrerportal.php">Lehrerportal</a>
        <a href="schuelerportal.php">Schülerportal</a>
    </div>



</body>
</html>