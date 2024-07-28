<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css">
    <title>Connexion</title>
</head>

<body>

    <!-- Formulaire de connexion -->
    <div class="modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="loginMessage"></div>
                    <form id="loginForm" method="POST">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="loginEmail" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" id="loginPassword" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Se connecter</button>
                    </form>
                    <p class="mt-3">Mot de passe oublié ? <a href="#" id="forgotPasswordLink">Cliquez ici</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulaire de réinitialisation du mot de passe -->
    <div class="modal" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="forgotPasswordModalLabel">Réinitialiser le mot de passe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="forgotPasswordMessage"></div>
                    <form id="forgotPasswordForm">
                        <div class="mb-3">
                            <label for="forgotEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="forgotEmail" name="email" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        // Ouverture du formulaire de connexion
        $('#loginModal').modal('show');

        // Ouvrir le formulaire de réinitialisation du mot de passe
        $('#forgotPasswordLink').click(function(e) {
            e.preventDefault();
            $('#loginModal').modal('hide');
            $('#forgotPasswordModal').modal('show');
        });

        // Soumettre le formulaire de connexion via AJAX
        $('#loginForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'Authentification/connexion-ajax.php',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === "success") {
                        $('#loginMessage').html('<div class="alert alert-success">' +
                            response.message + '</div>');
                        $('#loginForm')[0].reset();
                        $('#loginModal').modal('hide');
                    } else {
                        $('#loginMessage').html('<div class="alert alert-danger">' +
                            response.message + '</div>');
                    }
                },
                error: function() {
                    $('#loginMessage').html(
                        '<div class="alert alert-danger">Erreur lors de la connexion.</div>'
                        );
                }
            });
        });

        // Soumettre le formulaire de réinitialisation du mot de passe via AJAX
        $('#forgotPasswordForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'Authentification/forgot_password_handler.php',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response);
                    $('#forgotPasswordForm')[0].reset();
                    $('#forgotPasswordModal').modal('hide');
                },
                error: function() {
                    alert('Erreur lors de l\'envoi de la réinitialisation.');
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