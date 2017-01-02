<?php

    class Database
    {
        private $dbhost = 'localhost';
        private $dbuser = 'root';
        private $dbpassword = '';
        private $dbname = 'login_reg_using_pdo';
        public $pdo;

        public function __construct()
        {
            /*amr logic holo jodi $pdo var e kono kisu na thake tahole db er connection die pdo variable e
            value dhukabo..*/
            if (!isset($this->pdo)) {
                try {
                    $link = new PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname, $this->dbuser, $this->dbpassword);
                    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $link->exec('SET CHARACTER SET utf8');
                    $this->pdo = $link;
                } catch (PDOException $e) {
                    die('Failed to connect with the database. Reason : ' . $e->getMessage());
                }


            }
        }

    }