<?php

// Define db config
define("DB_HOST", "localhost");
define("DB_USER", "location_user");
define("DB_PASS", "!location_user!");
define("DB_NAME", "location_filtering");


class Db {
    private $host   = DB_HOST;
    private $user   = DB_USER;
    private $pass   = DB_PASS;
    private $dbname = DB_NAME;

    public  $dbh;
    private $error;

    public function __construct() {

        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT    =>  true,
            PDO::ATTR_ERRMODE       =>  PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        catch(PDOException $e) {
            $this->error = $e->getMessage();
        }
    }
}
