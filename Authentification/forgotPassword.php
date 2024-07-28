<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel"
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
        $('#forgotPasswordForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: 'Authentification/forgotPassword-ajax.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.status === "success") {
                        $('#forgotPasswordMessage').html(
                            '<div class="alert alert-success">' + response.message +
                            '</div>');
                        $('#forgotPasswordForm')[0].reset();
                    } else {
                        $('#forgotPasswordMessage').html(
                            '<div class="alert alert-danger">' + response.message +
                            '</div>');
                    }
                },
                error: function() {
                    $('#forgotPasswordMessage').html(
                        '<div class="alert alert-danger">Une erreur est survenue.</div>'
                        );
                }
            });
        });
    });
    </script>

</body>

</html>