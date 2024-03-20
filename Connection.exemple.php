<?php

class Connection {
    public $connection;
    public $conectado;

    public function __construct() {
        $this->connection = mysqli_connect(
            'localhost:3306',
            'root',
            '',
            'php'
        );
        $this->conectado = true;
    }

    public function close() {
        mysqli_close($this->connection);
    }
}

?>