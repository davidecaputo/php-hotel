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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex p-5">
        <?php foreach ($hotels as $key => $value) { ?>
            <ul>
                <li><?php echo '<span class="d-block">Nome:</span>' .' '. $hotels[$key]['name'] ?></li>
                <li><?php echo '<span class="d-block">Descrizione:</span>' .' '. $hotels[$key]['description'] ?></li>
                <li><?php echo '<span class="d-block">Parcheggio:</span>' .' '.     ($hotels[$key]['parking']? 'Sì' : 'No') ?></li>
                <li><?php echo '<span class="d-block">Voto:</span>' .' '. $hotels[$key]['vote'] ?></li>
                <li><?php echo '<span class="d-block">Distanza dal centro:</span>' .' '. $hotels[$key]['distance_to_center'] .' '. '<span>Km</span>' ?></li>
            </ul>
        <?php } ?>
    </div>
</body>
</html>