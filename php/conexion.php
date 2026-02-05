<?php
/**
 * Clase de conexión a base de datos o LDAP
 */
class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $password = "";
    private $dbname = "devwebpro";

    public function conectar() {
        $conn = new mysqli($this->host, $this->usuario, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>

