<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $json_file = file_get_contents("https://jsonplaceholder.typicode.com/users");   
            $json_str = json_decode($json_file, true);
            $num_array = count($json_str);
            $contador = 0;
            $contador_sul = 0;
            echo "<a style='font-family: arial;'>Websites:<br>";
            while($contador != $num_array){
                $item_ext = $json_str[$contador];
                $website = $item_ext['website'];
                $address = $item_ext['address'];
                $address2 = $address['geo'];
                $lat = $address2['lat'];
                echo $website."<br>";
                if($lat < 0){
                    $contador_sul += 1;
                }
                $contador += 1;
            }
            $contador1 = 1;
            $username = "";
        
            while($username != "Samantha"){
                $item_ext = $json_str[$contador1];
                $username = $item_ext['username'];
                $email = $item_ext['email'];
                $contador1 += 1;
            }
            echo "<br>Email:<br>".$email."<br>";
            echo "<br>Usuários do hemifério sul: ".$contador_sul;
            echo "</a>";
        ?>
    </body>
</html>
