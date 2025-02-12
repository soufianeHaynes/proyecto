<?php

class HolaMundo {
    private $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return "<p>Hola, " . htmlspecialchars($this->nombre) . "!</p>";
   
       return "<p>Holaaaaa, " . htmlspecialchars($this->nombre) . "!</p>";
 }
}
//ejemplo de uso 
print new HOlaMundo(¨Alumno¨);
?>
