<?php
    class Dados{
        private $file;
        private $website;
        private $user;
        private $email;
        private $lat;
        private $site = "https://jsonplaceholder.typicode.com/users";
        public $num;
        
        //função para armazenar as informações necessárias do link em arrays
        function setFile(){
            $json_file = file_get_contents($this->site);   
            $json_str = json_decode($json_file, true);
            $contador = 0;
            $num_array = count($json_str);
            $this->num = $num_array;
            while($num_array != $contador){
                $file = $json_str[$contador];
                $this->website[$contador] = $file['website'];
                $this->user[$contador] = $file['username'];
                $this->email[$contador] = $file['email'];
                $this->lat[$contador] = $file['address']['geo']['lat'];
                $contador += 1;
            }
            return $this->file = $json_str;
        }
        
        //Função para capturar o website de acordo com o valor do contador
        function getWebsite($contador){
            return $this->website[$contador];
        }
        
        //Função para capturar o username de acordo com o valor do contador
        function getUser($contador){
            return $this->user[$contador];
        }
        
        //Função para capturar o email de acordo com o valor do contador
        function getEmail($contador){
            return $this->email[$contador];
        }
        
        //Função para capturar a latitude de acordo com o valor do contador
        function getLat($contador){
            return $this->lat[$contador];
        }
    }
?>

