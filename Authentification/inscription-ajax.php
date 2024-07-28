<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hachage du mot de passe

    try {
        $dsn = 'mysql:host=localhost;dbname=easy_travel;charset=utf8mb4';
        $username = 'root';
        $password_db = ''; // Remplacez par votre mot de passe MySQL si nécessaire

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $pdo = new PDO($dsn, $username, $password_db, $options);

        $sql = "INSERT INTO utilisateur (Nom, Email, Password, Telephone) VALUES (:name, :email, :password, :phone)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':phone', $phone);

        if ($stmt->execute()) {
            echo json_encode(["status" => "success", "message" => "Inscription réussie!"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Erreur lors de l'inscription."]);
        }
    } catch (PDOException $e) {
        echo json_encode(["status" => "error", "message" => 'Échec de la connexion : ' . $e->getMessage()]);
    }
    exit();
}
?>