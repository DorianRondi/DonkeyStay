<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/Oualid/favicon.ico" type="image/x-icon">
    <title>DonkeyStay</title>

    <!-- FONTAWESOME JS -->
    <script src="https://kit.fontawesome.com/803e922635.js" crossorigin="anonymous"></script>

    <!-- CUSTOM CSS (Bootsrap 5.3.0 Alpha 3 inside)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="/Oualid/custom.css">
    <link rel="stylesheet" href="/Oualid/style.css">
    <link rel="stylesheet" href="/Oualid/Rooms.css">
    <link rel="stylesheet" href="/Oualid/contact.css">
    

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-donkey-primary fixed-top navbar-expand-md" aria-label="offcanvas navbar">
            <div class="container-fluid flex-nowrap">
                <div class="text-center navbar-brand">
                    <a href="/Oualid/index.php">
                        <img src="/core/img/donkey.png" alt="DonkeyStay Logo" title="DonkeyStay Alive" class="img-fluid w-25">
                    </a>
                </div>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav text-center flex-md-row">



                        <li class="nav-item me-4">
                            <a class="nav-link" aria-current="page" href="/Oualid/index.php">
                                <i class="fa-solid fa-house"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/reservation.php">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>Reservations</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/aboutUs.php">
                                <i class="fa-solid fa-users"></i>
                                <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="/Oualid/rooms.php">
                                <i class="fa-solid fa-bed"></i>
                                <p>Our Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                <i class="fa-solid fa-user-lock"></i>
                                <p>Connection</p>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Ne pas détruire !!!! -->
                <!-- Menu de connexion -->
                
                <div class="offcanvas offcanvas-end bg-donkey-primary" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Connection</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="collapse" id="navbarToggleExternalContent1">
                            <div class="bg-light p-4 text-dark rounded-top">
                                <form action="." method="POST">
                                    <fieldset>
                                        <label for="userLast" class="w-100">Nom*</label>
                                        <input type="text" name="userLast" id="userLast" class="w-100" placeholder="Nom" required>
                                        <label for="userFirst" class="w-100">Prénom*</label>
                                        <input type="text" name="userFirst" id="userFirst" class="w-100" placeholder="Prénom" required>
                                        <label for="userLogin" class="w-100">Login*</label>
                                        <input type="text" name="userLogin" id="userLogin" class="w-100" placeholder="Login" required>
                                        <label for="userPass" class="w-100">Password*</label>
                                        <input type="password" name="userPass" id="userPass" class="w-100" placeholder="Password" required>
                                        <input type="password" name="userPassChecker" id="userPassChecker" class="w-100 mt-2" placeholder="Password again" required>
                                        <label for="userEmail" class="w-100">eMail*</label>
                                        <input type="email" name="userEmail" id="userEmail" class="w-100" placeholder="eMail" required>
                                        <input type="submit" class="btn btn-info w-100 mt-4" value="Subscription" name="Subscription">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <nav class="navbar navbar-light bg-light rounded mt-n1">
                            <div class="container-fluid">
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Not registered for now</h5>
                                </button>
                            </div>
                        </nav>
                        <br>
                        <div class="collapse" id="navbarToggleExternalContent2">
                            <div class="bg-light p-4 text-dark rounded-top">
                                <form action="." method="POST">
                                    <fieldset>
                                        <label for="userLogin" class="w-100">Login*</label>
                                        <input type="text" name="userLogin" id="userLogin" class="w-100" placeholder="Login" required>
                                        <label for="userPass" class="w-100">Password*</label>
                                        <input type="password" name="userPass" id="userPass" class="w-100" placeholder="Password" required>
                                        <input type="submit" class="btn btn-info w-100 mt-4" value="Connection" name="Connection">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        <nav class="navbar navbar-light bg-light rounded mt-n1">
                            <div class="container-fluid">
                                <button class="navbar-toggler w-100 border border-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="false" aria-label="Toggle navigation">
                                    <h5>Already registred</h5>
                                </button>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid" style="margin-top:96px;">