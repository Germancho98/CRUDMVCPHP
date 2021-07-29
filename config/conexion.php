<?php
    class Conectar{
        protected $dbh;    
        protected function Conexion(){
            $servername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "productos";
        
            try{
                $conectar = $this->dbh = new PDO("mysql:local=$servername;dbname=$dbName","$dbUsername","$dbPassword");
                return $conectar;
            }catch(Exception $e){
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
        }

    }
?>