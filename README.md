# php-_basic_login
#configuration

  Mettre le dossier dans dossier du server htdocs si c'est xampp
  activer le serveur web et le serveur de la base de données
  créer la base de données et les tables avec ce code :

    CREATE DATABASE loginphp;

    CREATE TABLE users (
      id INT AUTO_INCREMENT PRIMARY KEY,
      nom VARCHAR(50) NOT NULL,
      email VARCHAR(100) NOT NULL;,
      mdp VARCHAR(50) NOT NULL
    );
