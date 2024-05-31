<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Coli</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .flex-container {
            display: flex;
            justify-content: space-between;
        }
        .shadow {
            box-shadow: 0px 0px 10px rgba(5, 5, 5, 0.1); /* Réglage de l'ombre */
        }
        .w-1/2 {
            flex: 0 0 48%;
        }
    </style>
</head>
<body>
<h2 class="text-3xl font-bold mb-8 text-center mr-3 py-4">Nouveau colis</h2>

<div class="max-w-md mx-auto bg-white shadow-md rounded-md p-6 mt-10 shadow">
    <form action="coliesinfo.php" method="POST">
        <div class="mb-4">
            <label class="block text-gray-700">Produit pas en stock</label>
            <input type="text" name="nom_produit" placeholder="Nom du produit" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Message pour le livreur</label>
            <input type="text" name="message_livreur" placeholder="Ajouter un message pour le livreur" class="w-full border border-gray-300 p-2 rounded">
        </div>
        
        <div class="mb-4 flex-container">
            <div class="w-1/2 mr-2">
                <label class="block text-gray-700">Nom du client</label>
                <input type="text" name="nom_client" placeholder="Nom du destinataire" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="w-1/2 ml-2">
                <label class="block text-gray-700">Adresse de livraison</label>
                <input type="text" name="adresse" placeholder="Adresse de livraison" class="w-full border border-gray-300 p-2 rounded">
            </div>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Wilaya de livraison</label>
            <input type="text" name="wilaya" placeholder="Wilaya de livraison" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Type de livraison</label>
            <select name="type_livraison" class="w-full border border-gray-300 p-2 rounded">
                <option value="StopDesk">StopDesk</option>
                <option value="A Domicile">A Domicile</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Prix de vente unitaire</label>
            <input type="text" name="prix_vente" placeholder="Prix de vente total" class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div class="mb-4 flex-container">
            <div class="w-1/2 mr-2">
                <label class="block text-gray-700">Quantité</label>
                <input type="number" name="quantite" value="1" class="w-full border border-gray-300 p-2 rounded">
            </div>
            <div class="w-1/2 ml-2">
                <label class="block text-gray-700">Poids</label>
                <input type="number" name="poids" value="1" class="w-full border border-gray-300 p-2 rounded">
            </div>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Prix de livraison</label>
            <input type="text" name="prix_livraison" placeholder="Prix de livraison" class="w-full border border-gray-300 p-2 rounded">
            <div class="mt-2 space-x-4">
                <input type="checkbox" id="fragile" name="fragile">
                <label for="fragile" class="text-gray-700">Fragile</label>
                <input type="checkbox" id="openable" name="openable">
                <label for="openable" class="text-gray-700">Peut être ouvert</label>
            </div>
            <div class="mt-2 space-x-4">
                <input type="checkbox" id="livraison_vendeur" name="livraison_vendeur">
                <label for="livraison_vendeur" class="text-gray-700">Livraison payée par le vendeur</label>
                <input type="checkbox" id="echec" name="echec">
                <label for="echec" class="text-gray-700">Echec</label>
            </div>
        </div>
        
        <div class="mb-4">
            <label class="block text-gray-700">Type de vente</label>
            <select name="type_vente" class="w-full border border-gray-300 p-2 rounded">
                <option value="Commerce électronique">Commerce électronique</option>
                <option value="Simple">Simple</option>
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Envoyer</button>
        <a href="indexcolis.php" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Retour au page d'acceuil</a>
    </form>
</div>
</body>
</html>
