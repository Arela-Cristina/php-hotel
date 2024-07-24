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

?> 

<!-- Stampare tutti i nostri hotel con tutti i dati disponibili. -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <div>   
        <!-- facciamo un forEach per iterare su ogni elemento del array -->
         <!-- Como nuestra estructura es multi, no podemos lanzar todo con un simple forEach, hay que aprovechar la palabra clave para iterar sobre cada objeto del array -->
        <?php foreach($hotels as $hotel): ?>
            <!-- Aqui tomamos palabra clave mas el nombre del hotel -->
            <h2><?php echo $hotel['name']; ?></h2>
            <!-- Aqui tomamos palabra clave mas la descripcion del hotel -->
            <p><?php echo $hotel['description']; ?></p>
            <!-- Aqui tomamos palabra clave mas y la propiedad parking del hotel e imponemos un ternario ? 'Yes' : 'No', parking tiene valores Booleanos, si el parking es True, entonces el output en pantalla sera Yes, y lo mismo con No. -->
            <p>Parking: <?php echo $hotel['parking'] ? 'Yes' : 'No'; ?></p>
            <!-- Aqui tomamos palabra clave mas la puntuacion del hotel -->
            <p>Vote: <?php echo $hotel['vote']; ?></p>
            <!-- Aqui tomamos palabra clave mas la distancia en km del hotel -->
            <p>Distance to center: <?php echo $hotel['distance_to_center']; ?> km</p>
            <hr>
        <?php endforeach; ?></div>
 </body>
 </html>
