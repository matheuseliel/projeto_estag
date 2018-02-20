<?php
    class Dados{
        private $file;
        private $website;
        private $user;
        private $email;
        private $lat;
        private $site = "https://jsonplaceholder.typicode.com/users";
        public $num;
                
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
?>

