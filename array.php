<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu projeto</title>
    <!-- FONTE -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3d2750cf9d.js" crossorigin="anonymous"></script>
    <script src="js/progressbar.min.js"> </script>
</head>


<body>



    <?php include('include/header.php'); ?>
    <!-- header include -->
    <div class="row title-array">

        <div class="col-12">
            <h1>ARRAY</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="tabela table-striped">

          
        
                <table class="table table-hover">

                    <tr>
                        <th>Country</th>
                        <th>Capital</th>
                    </tr>

                    <?php
                    
                    
                    $pesquisado = filter_input(INPUT_GET, 'pais');

                    $countries = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw");
                    
                    echo isset($countries[$pesquisado])? $countries[$pesquisado] : 'Sorry, but this country is not listed';
                  
                  
                    foreach ($countries as $x => $x_value) {

                        echo "<tr><td> " . $x . "</td><td>" . $x_value . "</td></tr>";

                        
                    }
                    ?>
                    
                    </table>

                    
            </div>
        </div>
    </div>

    <?php include('include/footer.php'); ?>
    <!-- footer include -->






    <!-- JAVASCRIPT-->
    <script src="js/scripts.js">
    </script>
</body>

</html>