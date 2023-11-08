<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>login</title>
</head>
<body>
<form method="post" action="login.php">
    <center>
        <div class="m-5">
        <h2 class="title">connection</h2>
        <input placeholder="Votre nom" type="text" name="nom" class="form-control mt-1">
        
        <br>
        <input placeholder="Votre mot de passe" type="text" name="password" class="form-control mt-1">
        
        <button type="submit" class="btn btn-warning text-light fw-bold">S'incrire</button>
        </div>
        </center>
    </form>
    <?php
    include("config.php");
   
    $nom = $_POST['nom'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE nom=:nom AND mdp= :password";

    $statement = $pdo->prepare($query);

    $statement->execute([
    ':nom' => $nom,
    ':password' => $password
    ]);
        if ($statement->rowCount() == 1) {
         echo "<div class='alert alert-success'>
                utilisateur connecter avec succes
                </div>";
        } else {
            echo "<div class='alert alert-danger'>
            utilisateur no connecté avec succes
            </div>";
        }
        
    ?>
</body>
</html>