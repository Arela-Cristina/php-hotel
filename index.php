<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

// hago una copia de mi array original, asi mi arry original queda intacto en el casod e que lo necesite, y puedo trabjar con mi array clonado
$filteredHotels = $hotels;

// BONUS-1 - Aggiungere un form ad inizio pagina che tramite una richiesta GET permetta di filtrare gli hotel che hanno un parcheggio.

//isset sirve para verificar si existe un valor en una variable, en este caso $_GET['hasAparking'], verifica si user ha ingresado un valor en el check box.
if (isset($_GET['hasAparking'])) {
    // creo un Array vacio en donde pushare los datos que voy a filtrar
    $filteredHotels = [];
    // Hago un ciclo for each para filtrar los elementos de mi array $hotels
    foreach ($hotels as $hotel) {
        // Luego impongo la condicion, si parking es identico a true
        if ($hotel['parking'] === true) {
            // lo pusho en el array nuevo, esta es la sintaxis de pushar.
            $filteredHotels[] = $hotel;
        }
    }
}

//BONUS-2 - Aggiungere un secondo campo al form che permetta di filtrare gli hotel per voto (es. inserisco 3 ed ottengo tutti gli hotel che hanno un voto di tre stelle o superiore)

// creo un array con los votos para inserirlos de manera dinamica
$rankHotels = [1,2,3,4,5];

//// hago una copia de mi array original, asi mi array original queda intacto en el casod e que lo necesite, y puedo trabjar con mi array clonado. 
if (isset($_GET['rank'])) {
    $filteredHotels = [];
    //guardo en una variable $votes, la asignacion de los rankings 1 2 3 4 5, escribo int adelante porque el valor de mis rankings es un numero entero, seria como un parse in.
    $votes = (int)$_GET['rank'];
    foreach($hotels as $hotel) { //ciclo nuevamente
        if ($hotel['vote'] <= $votes) { // impongo la condicion si vote es igual a 12345
            $filteredHotels[] = $hotel; // si es igual pusho. 
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>

<section class="container col-10">
    <h3>PHP Hotel</h3>
    <form action="index.php" method="GET">
        <div>

        <!-- check box -->
            <input type="checkbox" name="hasAparking">
            <label>Solo con parcheggio </label>
        </div>

         <!-- rank -->
        <div>
            <h5>Voto</h5>
            <?php foreach($rankHotels as $votes): ?>
            <input type="radio" name="rank" id="rank_<?php echo $votes ?>" value="<?php echo $votes ?>" >
            <label><?php echo $votes ?></label>
            <?php endforeach; ?>
        </div>

        <!-- submit  enviar inviare, debe ser submit para que envie los datos -->
        <button type="submit" class="btn btn-primary">Filtra</button>
    </form>

    <!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"> <h3>Nome</h3></th>
                    <th scope="col"><h3>Descrizione</h3></th>
                    <th scope="col"> <h3>Parcheggio</h3></th>
                    <th scope="col"><h3>Voto</h3></th>
                    <th scope="col"><h3>Distanza</h3></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filteredHotels as $hotel): ?>
                <tr>
                    <th scope="row"><?php echo $hotel['name']; ?></th>
                    <th scope="row"><?php echo $hotel['description']; ?></th>
                    <th scope="row"><?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></th>
                    <th scope="row"><?php echo $hotel['vote']; ?></th>
                    <th scope="row"><?php echo $hotel['distance_to_center']; ?></th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php"><button  class="btn btn-primary">Reset</button></a>              
</section>
</body>

</html>