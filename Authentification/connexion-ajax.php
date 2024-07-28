<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        $dsn = 'mysql:host=localhost;dbname=easy_travel;charset=utf8mb4';
        $username = 'root';
        $password_db = ''; // Remplacez par votre mot de passe MySQL si nécessaire

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $pdo = new PDO($dsn, $username, $password_db, $options);

        $sql = "SELECT * FROM utilisateur WHERE Email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['Password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['Nom'];
            echo json_encode(["status" => "success", "message" => "Connexion réussie!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Email ou mot de passe incorrect."]);
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => 'Échec de la connexion : ' . $e->getMessage()]);
    }
    exit();
}
?>