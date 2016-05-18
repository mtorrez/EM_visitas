<?php
class LibroVisitas
{
    private $archivo = 'miarchivo.txt';
    private $canal;
    private $tamanio;
    private $nombre;
    private $contenido;

    function __construct(){

    }

    public function escribirLibro($nombre, $texto){
        $this->canal = fopen($this->archivo,"a+");

        $this->nombre = "<p><strong>Nombre:</strong> ".$nombre.  "</p>";
        $this->texto = "<p><strong>Comentario:</strong> ".$texto.  "</p> <hr>";
		

        fwrite($this->canal, $this->nombre);
        fwrite($this->canal, $this->texto);

        fclose($this->canal);

    }

    public function leerLibro(){
        $this->canal = fopen($this->archivo,"a+");
        $this->tamanio = filesize($this->archivo);
        if ($this->tamanio > 0){
            $this->contenido = fread($this->canal, $this->tamanio);
        }
        return $this->contenido;
    }
}

?>