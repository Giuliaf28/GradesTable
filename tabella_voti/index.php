<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella voti</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 

        $materie=["Italiano","Matematica","Storia","Inglese","Sistemi","Informatica","Tecnologie","Ed Fisica","Gestione Progetto"];
        $persone=[
                    'Aloni Davide' => [],
                    'Bolis Filippo' => [],
                    'Carugati Christian' => [],
                    'Cazzaniga Samuele' => [],
                    'Ceppi Luca' => [],
                    'Colombo Christian' => [],
                    'Douaifia Omar' => [],
                    'Forlani Giulia' => [],
                    'Galbiati Nicolò' => [],
                    'Grisoni Nicolò' => [],
                    'Molteni Mattia' => [],
                    'Montagna Gioele' => [],
                    'Novati Andrea' => [],
                    'Porro Daniele' => [],
                    'Proserpio Andrea' => [],
                    'Ramella Guido' => [],
                    'Sanvito Lorenzo' => [],

                ];
                
        function creaTabella(&$materie){
            echo "<table>";
            echo "<th> nome</th>";
            
            foreach ($materie as $key => $value) {
                echo "<th>$value</th>";
            }        
        }


        function inizializzaPersone(&$persone, $materie){

            foreach ($persone as $nome => $arrayPersona) {

                for ($i=0; $i < sizeof($materie); $i++) { 
                    # code...
                    $persone[$nome][$i]=rand(2, 10);
                };
                " <br>";
            }
            //print_r($persone);



        }

        function popolaTabella($persone){
            foreach ($persone as $nome => $voti) {

                echo "<tr>";
                echo "<td>".$nome."</td>";

                foreach ($voti as $key => $value) {
                    //echo  $value;
                    echo "<td>". $value."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

        }
        


        creaTabella($materie); //funziona quindi ok
        inizializzaPersone($persone, $materie);
        popolaTabella($persone);


    


    ?>


</body>
</html>