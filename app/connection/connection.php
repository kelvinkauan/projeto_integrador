<?php 

// CRUD MEANS CREATE, READ, UPDATE, DELETE;

class Connection {


    // faz conexao com o banco de dados

    private static $host     = "localhost"; // o nome do host 
    private static $dbname   = "projeto_integrador_bkm"; // conectar com o banco 
    private static $user     = "root"; // usuario 
    private static $password = "password#22"; // senha 

    private static ?PDO $conn = null;

    public static function getConnection(): PDO {

        if(self::$conn == null){

            try {
                self::$conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, 
                self::$user, 
                self::$password);

                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(Exception $e) {
                print("Erro ao conectar com o banco de dados");
            }
        }

        return self::$conn;
    }

}