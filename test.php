<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">

    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
                <h3 class="navbar-brand" style="font-size: 30px;" href=" #">EasyTravel</h3>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Consulter Offre</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">Nos services <i class="bi bi-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="#">Caution bancaire (AVI)</a>
                            <a href="#">Assurance voyage</a>
                            <a href="#">Logement Etudiant</a>
                            <a href="#">Remboursement caution</a>
                            <a href="#">Frais scolarité</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link">EasyTravel <i class="bi bi-chevron-down"></i></a>
                        <div class="dropdown-content">
                            <a href="#">Nos offres</a>
                            <a href="#">Nos partenaires</a>
                            <a href="#">nous découvrir</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="loginLink">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="openRegistrationModal">Inscription</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nos contacts</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="bloc1">
            <div class="partie1">
                <p class="slogan">TibalStudentJob la première plaque forme de Job étudiant au cameroun</p>
                <p class="para2">Tu es étudiant et voudrais travailler en parallèle de tes études ?
                    TibalStudent c'est la plateforme des multiples opportunités, leader au Cameroun. Tu es au bon
                    endroit.
                </p>
                <button class="bouton1">Découvrez ce que vous avez à gagner</button>
            </div>
            <div class="partie2">
                <img src="Images/eleve.jpg" alt="image" class="ascension">
            </div>
        </div>
        <div class="bloc2">
            <div class="partie3">
                <img src="Images/etudiant.jpg" alt="image" class="ascension">
            </div>
            <div class="partie4">
                <p class="slogan">Frequenter tout en ayant un Job</p>
                <p class="para2">Obtenir un emploi étudiant n'est plus choisi difficile. Notre plateforme vous donne la
                    possibilité
                    de consulter les différentes offres destinées aux étudiants, mettre vos connaissances théoriques en
                    pratique.
                    Ce qui est essentiel pour votre avenir professionnel, ce qui vous permettra de gagner en expérience.
                    Gagner de l'argent en étant étudiant n'est pas choisi facile de nos jours.
                    TibalStudentJob vous donne la possibilité d'obtenir votre emploi idéal via la plateforme.
                </p>
                <br><br><br>
                <p class="slogan2">Pourquoi nous faire confiance ?</p>
            </div>
        </div>
        <div class="bloc3">
            <div class="box1">
                <p class="motif">Avoir un job</p>
                <p>Obtenir un emploi étudiant n'est plus choisi difficile,
                    notre plateforme vous donne la possibilité de consulter les différentes offres.</p>
            </div>
            <div class="box2">
                <p class="motif">Gagner En Expérience</p>
                <p>Mettre vos connaissances théoriques en pratique est essentielles
                    pour votre avenir professionnel, ce qui vous permettra de gagner en expérience.</p>
            </div>
            <div class="box3">
                <p class="motif">Se faire de l'argent</p>
                <p>Gagner de l'argent étant étudiant est une chose incontournable de nos jours,
                    et vous avez la possibilité de l'avoir via notre plateforme.</p>
            </div>
        </div>

        <div class="nom-bouton">
            <button class="bouton2">Voir plus</button>
        </div>

        <div class="blocs" style="display: none;">
            <div class="box1">
                <p class="motif">Avoir un job</p>
                <p>Obtenir un emploi étudiant n'est plus choisi difficile,
                    notre plateforme vous donne la possibilité de consulter les différentes offres.</p>
            </div>
            <div class="box2">
                <p class="motif">Gagner En Expérience</p>
                <p>Mettre vos connaissances théoriques en pratique est essentielles
                    pour votre avenir professionnel, ce qui vous permettra de gagner en expérience.</p>
            </div>
            <div class="box3">
                <p class="motif">Se faire de l'argent</p>
                <p>Gagner de l'argent étant étudiant est une chose incontournable de nos jours,
                    et vous avez la possibilité de l'avoir via notre plateforme.</p>
            </div>
        </div>
        <br>

        <div class="video-section">
            <h2>Avec EasyTravel, ton voyage est assuré.</h2>
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/HVRg-NvRmDM" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="video-section">
            <h2>Ils nous ont fait confiance pour leur procédure.</h2>
            <div class="group-videos">
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/HVRg-NvRmDM" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/HVRg-NvRmDM" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="video">
                    <iframe src="https://www.youtube.com/embed/HVRg-NvRmDM" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>

        </div>
        <div class="chat">
            <i class="fa fa-comments fa-5x" data-bs-toggle="modal" data-bs-target="#exampleModal"
                style="color: darkorange; position: fixed; top: 535px; right: 18px; cursor: pointer;"></i>
        </div>

        <form>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" style="margin-top: 55px;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Contactez l'entreprise
                                TilbaStudentJob
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Votre nom</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Alex KUETCHE">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="nom@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Rédigez votre
                                    message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                                style="background-color: darkorange; border-color: darkorange;">Envoyer</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="container mt-5">
            <h2 class="mb-4">Télécharger une photo</h2>
            <form>
                <div class="form-group">
                    <label for="photoInput"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"
                            style="color: rgb(128, 128, 128); font-size: 60px; position: fixed; right: 335px;"></i></label>
                    <input type="file" class="form-control-file" id="photoInput" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>

        <h1>GeekspourGeeks</h1>
        <input type="file">
        <img id="previewImage">
        <p class="pi">Le lien vers cette image est :</p>

    </main>

    <!-- Modal container -->
    <div id="registrationModalContainer"></div>
    <div id="loginLink"></div>
    <!-- Modals container -->
    <!-- <div id="modalContainer"></div> -->
    <style>
    /* ENTÊTE */
    body {
        background-color: rgba(255, 255, 255, 0.9);
    }

    nav {
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        height: 70px;
        font-size: 18px;
    }

    .navbar-brand {
        font-size: 25px;
        color: darkorange;
        margin-left: 20px;
    }

    .collapse-navbar {
        margin-left: 110px;
    }

    .nav-item {
        margin-right: 10px;
    }

    /* PRINCIPAL */
    .bloc1 {
        display: flex;
        background-color: wheat;
        height: 380px;
    }

    .bloc2 {
        display: flex;
    }

    .slogan {
        font-weight: bold;
        font-size: 40px;
        margin-left: 10px;
        padding-top: 40px;
    }

    .slogan2 {
        color: darkorange;
        font-size: 40px;
        font-weight: bold;
        margin-left: 20px;
    }

    .para2 {
        padding: 20px;
    }

    .bouton1 {
        color: white;
        background-color: darkorange;
        border-color: darkorange;
        border-radius: 5px;
        margin-left: 25px;
        border: darkorange;
        height: 37px;
    }

    img {
        height: 350px;
        width: 400px;
        margin-right: 20px;
        padding-top: 60px;
    }

    @keyframes ascension {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0);
        }
    }

    .ascension {
        animation: ascension 3s infinite;
    }

    .partie3 {
        margin-left: 10px;
    }

    .bloc3 {
        display: flex;
        background-color: blanchedalmond;
        height: 270px;
    }

    .blocs {
        display: flex;
        background-color: blanchedalmond;
        height: 250px;
    }

    .nom-bouton {
        background-color: blanchedalmond;
        padding: 10px;
    }

    .box1 {
        height: 190px;
        width: 340px;
        border-radius: 7px;
        margin-right: 135px;
        background-color: white;
        padding: 20px;
        margin-left: 30px;
        margin-top: 40px;
        box-shadow: inset 5px 5px 10px -5px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .box2 {
        height: 190px;
        width: 340px;
        border-radius: 7px;
        margin-right: 135px;
        background-color: white;
        margin-top: 40px;
        padding: 20px;
        box-shadow: inset 5px 5px 10px -5px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .box3 {
        height: 190px;
        width: 340px;
        border-radius: 7px;
        margin-top: 40px;
        background-color: white;
        padding: 20px;
        box-shadow: inset 5px 5px 10px -5px rgba(0, 0, 0, 0.5);
        cursor: pointer;
    }

    .motif {
        font-size: 18px;
        font-weight: bold;
    }

    .bouton2 {
        color: white;
        background-color: darkorange;
        border-color: darkorange;
        border-radius: 5px;
        margin-left: 550px;
        margin-bottom: 20px;
        border: darkorange;
        height: 37px;
        width: 200px;
    }

    .form-control {
        border-color: #ced4da;
    }

    .form-control:focus {
        border-color: darkorange;
        box-shadow: 0 0 0 0.25rem rgba(255, 140, 0, 0.25);
    }

    .dropdown {
        display: inline-block;
        /* position: relative; */
    }

    .nav-link {
        background: none;
        border: none;
        color: inherit;
        font: inherit;
        cursor: pointer;
        text-decoration: none;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        top: 100%;
        /* Positionne le dropdown en dessous du lien */
        left: 0;
        /* Aligne le dropdown avec le lien */
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        white-space: nowrap;
        /* Empêche les liens de s'écrire sur deux lignes */
    }

    .dropdown-content a:hover {
        /* background-color: #f1f1f1; */
        color: orange;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .video-section {
        /* background-color: #2db56b; */
        padding: 20px 0;
        text-align: center;
        color: orange;
    }

    .video-container {
        position: relative;
        height: 0;
        overflow: hidden;
        width: 1000px;
        height: 550px;
        background: #000;
        margin: 20px auto;
        border: 1px solid #ddd;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .group-videos {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        padding: 20px;
    }

    .video {
        position: relative;
        width: 400px;
        height: 250px;
        background: #000;
        border: 1px solid #ddd;
    }

    .video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    </style>

    <script>
    $(document).ready(function() {
        $("a.nav-link").click(function(e) {
            e.preventDefault();
            $("a.nav-link").css("color", "");
            $(this).css("color", "darkorange");
        });

        $(".bouton2").click(function() {
            $("div.blocs").toggle();
        });

        $("#uploadButton").click(function() {
            $("#fileInput").click();
        });

        $("#fileInput").change(function() {
            $("#fileName").text(this.files[0].name);
            $("button[type=submit]").show();
        });

        $("#uploadForm").submit(function(e) {
            e.preventDefault();
        });
    });

    // POPUP D'INSCRIPTION
    $(document).ready(function() {
        $('#openRegistrationModal').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'Authentification/inscription.php',
                method: 'GET',
                success: function(response) {
                    $('#registrationModalContainer').html(response);
                    $('#registrationModal').modal('show');
                }
            });
        });
    });

    // FORMULAIRE DE CONNEXION
    $(document).ready(function() {
        $('#loginLink').click(function(e) {
            e.preventDefault();
            $.ajax({
                url: 'Authentification/connexion.php',
                method: 'GET',
                success: function(data) {
                    $('body').append(data);
                    $('#loginModal').modal('show');
                }
            });
        });

        // Ouvrir le modal de réinitialisation de mot de passe à partir du lien dans le modal de connexion
        $(document).on('click', '#forgotPasswordLink', function(e) {
            e.preventDefault();
            $('#loginModal').modal('hide');
            $.ajax({
                url: 'Authentification/forgotPassword.php',
                method: 'GET',
                success: function(response) {
                    $('#modalContainer').html(response);
                    $('#forgotPasswordModal').modal('show');
                }
            });
        });
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>

</html>