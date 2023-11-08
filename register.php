<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>login php</title>
</head>
<body>
    <form method="post" action="exemplelogin.php">
    <center>
        <div class="m-5">
        <h2 class="title">Inscritption</h2>
        <input placeholder="Votre nom" type="text" name="nom" class="form-control mt-1">
        
        <br>
        <input placeholder="Votre email" type="text" name="email" class="form-control mt-1">
        
        <br>
        <input placeholder="Votre mot de passe" type="text" name="password" class="form-control mt-1">
        
        <button type="submit" class="btn btn-warning text-light fw-bold">S'incrire</button>
        </div>
        </center>
    </form>
        

    <?php
    include("config.php");
   
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (nom, email, mdp) VALUES (:nom, :email, :password)";

    $statement = $pdo->prepare($query);

    $statement->execute([
    ':nom' => $nom,
    ':email' => $email,
    ':password' => $password
    ]);
        // if ($state->rowCount == 1) {
        //  echo "<div class='alert alert-success'>
        //         utilisateur creer avec succes
        //         </div>";
        // } else {
        //     # code...
        // }
        
    ?>
</body>
</html>