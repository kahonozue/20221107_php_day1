<!-- http://localhost/php-exercises/day1/challenge/challenge.php -->
<!-- This chapter will be Project-based. We will create a Car rental agency. 
    The Car agency should show the availability of the cars, the make, and models of the cars, price, and location of the specific rental place.
    The second thing you need to do is to create user-friendly GUI rendering. 
    You should use Bootstrap elements to create GUI for this project. 
    Come up with an idea of which data you would like to present and which pages (forms, tables) you need in your GUI part and create them.  -->
    <?php
    $car_info = ["availability", "make", "model", "price", "rental_place"];
    $car_array = array(
        "Volkswagen_Polo" => array(
            "availability" => "yes",
            "make" => "Volkswagen",
            "model" => "Volkswagen_Polo",
            "price" => "\$129",
            "rental_place" => "Vienna"
        ),
        "Seat_Ibiza" => array(
            "availability" => "no",
            "make" => "Seat",
            "model" => "Seat_Ibiza",
            "price" => "\$506",
            "rental_place" => "Vienna"
        ),
        "Opel_Corsa" => array(
            "availability" => "yes",
            "make" => "Opel",
            "model" => "Opel_Corsa",
            "price" => "\$136",
            "rental_place" => "Vienna"
        ),
        "Volkswagen_up!" => array(
            "availability" => "yes",
            "make" => "Volkswagen",
            "model" => "Volkswagen_up!",
            "price" => "\$127",
            "rental_place" => "Vienna"
        )
        );
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/challenge.css">

    <script src="js/bootstrap.js"></script>

    <title>challenge</title>
</head>
<body>
    <div class='titileBlock'>
      <div class='title'>Car Rental</div>
    </div>
<div class='tableBlock col-md-7'>
    <table class='table table-bordered table-warning'>
        <thead class='thead-dark'>
            <tr>
                <th><?= $car_info[0] ?></th>
                <th><?= $car_info[1] ?></th>
                <th><?= $car_info[2] ?></th>
                <th><?= $car_info[3] ?></th>
                <th><?= $car_info[4] ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $car_array['Volkswagen_Polo']['availability'] ?></td>
                <td><?= $car_array['Volkswagen_Polo']['make'] ?></td>
                <td><?= $car_array['Volkswagen_Polo']['model'] ?></td>
                <td><?= $car_array['Volkswagen_Polo']['price'] ?></td>
                <td><?= $car_array['Volkswagen_Polo']['rental_place'] ?></td>
            </tr>
            <tr>
                <td><?= $car_array['Seat_Ibiza']['availability']?></td>
                <td><?= $car_array['Seat_Ibiza']['make']?></td>
                <td><?= $car_array['Seat_Ibiza']['model']?></td>
                <td><?= $car_array['Seat_Ibiza']['price']?></td>
                <td><?= $car_array['Seat_Ibiza']['rental_place']?></td>
            </tr>
            <tr>
                <td><?= $car_array['Opel_Corsa']['availability']?></td>
                <td><?= $car_array['Opel_Corsa']['make']?></td>
                <td><?= $car_array['Opel_Corsa']['model']?></td>
                <td><?= $car_array['Opel_Corsa']['price']?></td>
                <td><?= $car_array['Opel_Corsa']['rental_place']?></td>
            </tr>
            <tr>
                <td><?= $car_array['Volkswagen_up!']['availability'] ?></td>
                <td><?= $car_array['Volkswagen_up!']['make'] ?></td>
                <td><?= $car_array['Volkswagen_up!']['model'] ?></td>
                <td><?= $car_array['Volkswagen_up!']['price'] ?></td>
                <td><?= $car_array['Volkswagen_up!']['rental_place'] ?></td>
            </tr>
        </tbody>

    </table>

</div>



    
</body>
</html>