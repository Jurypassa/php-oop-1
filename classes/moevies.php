<?php

class Netflix {
    public $titolo;
    public $durata;
    public $regista;
    public $anno;
    public $genere;
    public $nazione;
    public $descrizione;

    public function __construct($_titolo, $_durata, $_regista, $_anno, $_genere, $_nazione, $_descrizione)
    {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->regista = $_regista;
        $this->anno = $_anno;
        $this->genere = $_genere;
        $this->nazione = $_nazione;
        $this->descrizione = $_descrizione;

    }

    public function info(){
        return "<h2>{$this->titolo}</h2> {$this->descrizione}";
    }
}