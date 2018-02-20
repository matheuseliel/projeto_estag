<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Estágio</title>
    </head>
    <body>
        <?php
            include ('métodos.php');
            $contas = new Dados();
            $contas->setFile();
            $contador = 0;
            $contador_sul = 0;
            echo "<a style='font-family: arial;'>Websites:<br>";
            while($contador != $contas->num){
                $website = $contas->getWebsite($contador);
                echo $website."<br>";
                $lat = $contas->getLat($contador);
                if($lat < 0){
                    $contador_sul += 1;
                }
                $contador += 1;
            }
            
            $contador = 0;
            $username = "";
        
            while($username != "Samantha"){
                $username = $contas->getUser($contador);
                $email = $contas->getEmail($contador);
                $contador += 1;
            }
            
            echo "<br>Email:<br>".$email."<br>";
            echo "<br>Usuários do hemifério sul: ".$contador_sul;
            echo "</a>";
        ?>
    </body>
</html>
