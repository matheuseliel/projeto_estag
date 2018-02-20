<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class Dados{
                
                private $file;
                private $website;
                private $user;
                private $email;
                private $lat;
                public $num;
                
                function setFile(){
                    $json_file = file_get_contents("https://jsonplaceholder.typicode.com/users");   
                    $json_str = json_decode($json_file, true);
                    $contador3 = 0;
                    $num_array = count($json_str);
                    $this->num = $num_array;
                    while($num_array != $contador3){
                        $file = $json_str[$contador3];
                        $this->website[$contador3] = $file['website'];
                        $this->user[$contador3] = $file['username'];
                        $this->email[$contador3] = $file['email'];
                        $this->lat[$contador3] = $file['address']['geo']['lat'];
                        $contador3 += 1;
                    }
                    return $this->file = $json_str;
                }
                function getWebsite($contador){
                    return $this->website[$contador];
                }
                function getUser($contador1){
                    return $this->user[$contador1];
                }
                function getEmail($contador1){
                    return $this->email[$contador1];
                }
                function getLat($contador){
                    return $this->lat[$contador];
                }
            }
            
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
            $contador1 = 1;
            $username = "";
        
            while($username != "Samantha"){
                $username = $contas->getUser($contador1);
                $email = $contas->getEmail($contador1);
                $contador1 += 1;
            }
            echo "<br>Email:<br>".$email."<br>";
            echo "<br>Usuários do hemifério sul: ".$contador_sul;
            echo "</a>";
        ?>
    </body>
</html>
