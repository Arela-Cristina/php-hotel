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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>

<section class="container col-10">
    <h3>PHP Hotel</h3>
    <form>
        <div>
        <label>
            <input type="radio" name="voto" value="0">
            Solo con parcheggio
        </label>
        </div>
        <div>
            <span><h5>Voto</h5></span>
            <label>
                <input type="radio" name="voto" value="1">
                1
            </label>
            <label>
                <input type="radio" name="voto" value="2">
                2
            </label>
            <label>
                <input type="radio" name="voto" value="3">
                3
            </label>
            <label>
                <input type="radio" name="voto" value="4">
                4
            </label>
            <label>
                <input type="radio" name="voto" value="5">
                5
            </label>
        </div>
        <button type="button" class="btn btn-primary">Filtra</button>
    </form>
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
            <tr>
                <th scope="row"><?php echo $hotels[0]['name']; ?></th>
                <td><?php echo $hotels[0]['description']; ?></td>
                <td><?php echo $hotels[0]['parking'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $hotels[0]['vote']; ?></td>
                <td><?php echo $hotels[0]['distance_to_center']; ?></td>
            </tr>
            <tr>
                <th scope="row"><?php echo $hotels[1]['name']; ?></th>
                <td><?php echo $hotels[1]['description']; ?></td>
                <td><?php echo $hotels[1]['parking'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $hotels[1]['vote']; ?></td>
                <td><?php echo $hotels[1]['distance_to_center']; ?></td>
            </tr>
            <tr>
                <th scope="row"><?php echo $hotels[2]['name']; ?></th>
                <td><?php echo $hotels[2]['description']; ?></td>
                <td><?php echo $hotels[2]['parking'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $hotels[2]['vote']; ?></td>
                <td><?php echo $hotels[2]['distance_to_center']; ?></td>
            </tr>
            <tr>
                <th scope="row"><?php echo $hotels[3]['name']; ?></th>
                <td><?php echo $hotels[3]['description']; ?></td>
                <td><?php echo $hotels[3]['parking'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $hotels[3]['vote']; ?></td>
                <td><?php echo $hotels[3]['distance_to_center']; ?></td>
            </tr>
            <tr>
                <th scope="row"><?php echo $hotels[4]['name']; ?></th>
                <td><?php echo $hotels[4]['description']; ?></td>
                <td><?php echo $hotels[4]['parking'] ? 'Yes' : 'No'; ?></td>
                <td><?php echo $hotels[4]['vote']; ?></td>
                <td><?php echo $hotels[4]['distance_to_center']; ?></td>
            </tr>
        </tbody>
    </table>
</section>
</body>

</html>