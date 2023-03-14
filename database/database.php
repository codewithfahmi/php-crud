<?php


class database
{
    private $dbHost;
    private $dbUser;
    private $dbPass;
    private $dbName;

    function __construct()
    {
        include_once("../config.php");
        $this->dbHost = $DB_HOST;
        $this->dbUser = $DB_USER;
        $this->dbPass = $DB_PASS;
        $this->dbName = $DB_NAME;
    }

    public function connect()
    {
        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);

        if ($mysqli->connect_error) {
            echo "Gagal terkoneksi ke database #> " . $mysqli->connect_error;
        }

        return $mysqli;
    }
}

// $connect = new database();
// $connect->connect();
