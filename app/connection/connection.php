<?php 

// CRUD MEANS CREATE, READ, UPDATE, DELETE;

class Connection {


    // connection.php faz a conexao com o banco de dados, primeiro cria as atribuitos 

    private static $host     = "localhost"; // o nome do localhost do ambiente;  
    private static $dbname   = "projeto_integrador_bkm"; // nome da bd que irá usar;
    private static $user     = "root"; // nome usuario;
    private static $password = "240103"; //a senha do ambiente;

    private static ?PDO $conn = null;

    public static function getConnection(): PDO {

        if(self::$conn == null){

            try {
                self::$conn = new PDO("mysql:host=".self::$host.
                "dbname=".self::$dbname, 
                self::$user, 
                self::$password);

               //self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(Exception $e) {
                print("Erro ao conectar com o banco de dados");
            }
        }

        return self::$conn;
    }

}