<?php

/*
    V ● Creazione di una classe ‘Movie’
    V ● Dichiarazione delle proprietà della classe
    V ● Dichiarazione del costruttore
    V ● Dichiarazione di almeno un metodo.
    V ● Fare poi degli esempi di utilizzo della classe istanziando ALMENO due oggetti e stampando a schermo il valore delle proprietà.

*/

class Movie {

    # Properties movie
    public $title;
    public $durata;
    public $sottotitolo;
    public $descrizione;
    public $poster;

    # construct
    function __construct($title, $durata, $sottotitolo, $descrizione = 'NON DISPONIBILE', $poster = null) {
        $this->title = $title;
        $this->durata = $durata;
        $this->sottotitolo = $sottotitolo;
        $this->descrizione = $descrizione;
        $this->poster = $poster;
    }

    # getter e setter
    function set_title($title) {
        $this->title = $title;
    }
    
    function get_title() {
        return $this->title;
    }

}

$movie1 = new Movie('i pirati dei caraibi',93,'Un avvententura dei mari','una breve descrizione');

$title = $movie1;

var_dump($title->get_title());

$movie1 = new Movie('i pirati dei caraibi',93,'Un avvententura dei mari','una breve descrizione');

$movie2 = new Movie('Un natale speciale',105,'Un magico natale');

var_dump('<br><br>');
var_dump('movies');

var_dump('<br><br>');
var_dump($movie1);

var_dump('<br><br>');
var_dump($movie2);
