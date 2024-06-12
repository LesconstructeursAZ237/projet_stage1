
<?php
//classe de connexion a la base de donner
class DatabaseConnection {
    private static $_instance = null;
    private $_pdo;
    private function __construct($host="localhost", $dbName="ifpli_bd_projet", $username="root", $password="", $charset = 'utf8mb4') {
        $dsn = "mysql:host={$host};dbname={$dbName};charset={$charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->_pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            throw new Exception('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getPdo() {
        return $this->_pdo;
    }
}


?>
