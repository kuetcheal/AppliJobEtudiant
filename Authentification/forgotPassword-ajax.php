<?php
require 'vendor/autoload.php';
use \Mailjet\Resources;

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=easy_travel;charset=utf8mb4';
$username = 'root';
$password_db = ''; 

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $username, $password_db, $options);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];

        // Vérification si l'email existe dans la base de données
        $sql = "SELECT * FROM utilisateur WHERE Email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            // Envoi de l'email avec Mailjet
            $mj = new \Mailjet\Client('f163a8d176afbcb29aae519bf6c5e181', 'bf285777b4d59f84a43855ae1b40f96d', true, ['version' => 'v3.1']);
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "akuetche55@gmail.com",
                            'Name' => "Easy Travail"
                        ],
                        'To' => [
                            [
                                'Email' => $email,
                                'Name' => $user['Nom']
                            ]
                        ],
                        'Subject' => "Réinitialisation de votre mot de passe",
                        'TextPart' => "Cliquez sur le lien suivant pour réinitialiser votre mot de passe : [lien]",
                        'HTMLPart' => "<h3>Bonjour {$user['Nom']},</h3><br />Cliquez sur le lien suivant pour réinitialiser votre mot de passe : <a href='[lien]'>Réinitialiser le mot de passe</a>"
                    ]
                ]
            ];

            $response = $mj->post(Resources::$Email, ['body' => $body]);
            if ($response->success()) {
                echo json_encode(["status" => "success", "message" => "Un email de réinitialisation a été envoyé."]);
            } else {
                echo json_encode(["status" => "error", "message" => "Échec de l'envoi de l'email."]);
            }
        } else {
            echo json_encode(["status" => "error", "message" => "Email non trouvé."]);
        }
    }
} catch (PDOException $e) {
    echo json_encode(["status" => "error", "message" => 'Échec de la connexion : ' . $e->getMessage()]);
}
?>