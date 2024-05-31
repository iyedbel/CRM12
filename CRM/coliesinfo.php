<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fichier";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO colis (nom_produit, message_livreur, nom_client, telephone_client, adresse_livraison, wilaya_livraison, commune_livraison, type_livraison, prix_vente_unitaire, quantite, poids, prix_livraison, fragile, openable, livraison_vendeur, echec, type_vente) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssdiiddiibb", $nom_produit, $message_livreur, $nom_client, $telephone_client, $adresse_livraison, $wilaya_livraison, $commune_livraison, $type_livraison, $prix_vente_unitaire, $quantite, $poids, $prix_livraison, $fragile, $openable, $livraison_vendeur, $echec, $type_vente);

// Set parameters and execute
$nom_produit = $_POST['nom_produit'];
$message_livreur = $_POST['message_livreur'];
$nom_client = $_POST['nom_client'];
$telephone_client = $_POST['telephone_client'];
$adresse_livraison = $_POST['adresse_livraison'];
$wilaya_livraison = $_POST['wilaya_livraison'];
$commune_livraison = $_POST['commune_livraison'];
$type_livraison = $_POST['type_livraison'];
$prix_vente_unitaire = (float) $_POST['prix_vente_unitaire'];
$quantite = (int) $_POST['quantite'];
$poids = (float) $_POST['poids'];
$prix_livraison = (float) $_POST['prix_livraison'];
$fragile = isset($_POST['fragile']) ? 1 : 0;
$openable = isset($_POST['openable']) ? 1 : 0;
$livraison_vendeur = isset($_POST['livraison_vendeur']) ? 1 : 0;
$echec = isset($_POST['echec']) ? 1 : 0;
$type_vente = $_POST['type_vente'];

$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>
