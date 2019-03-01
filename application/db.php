<?php
    
class DataBase {
    
    public $pdo;
    protected $driver = 'mysql';
    protected $host = 'localhost';
    protected $dbname = 'atcon';
    protected $charset = 'utf8';
    protected $port = 3306;
    protected $login = 'root';
    protected $pass = '';
    protected $option = [
        
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Error mod
        PDO::ATTR_PERSISTENT => true // Continuous connect

    ];

    public function __construct() {
        try {
            $this->pdo = new PDO(
                 $this->driver .
                 ':host=' . $this->host .
                ';dbname=' . $this->dbname . 
                 ';charset=' . $this->charset . 
                 ';port=' . $this->port . ';' , 
                 $this->login,
                 $this->pass
                );
         } catch(PDOException $e) {
            exit('Нет подключение к Базе данных. Ошибка: ' . $e->getMessage());
        }
    }
}