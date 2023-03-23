<?php
    class Book {
        public $author;
        public $title;
        public $editionNumber;
        public $publishPlace;
        public $editorial;
        public $year;
        public $pages;
        public $notes;
        public $isbn;

    public function __construct($author,$title,$editionNumber,$publishPlace,$editorial,$year,$pages,$notes,$isbn){
        if(preg_match("/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/",$isbn) 
        && preg_match("/\([^()]+\)/",$year)  && preg_match("/\^(\()?(?(1)[^\)\n\r]+[\)]?|[^\s\n\r]+)/",$editionNumber)){
            $this->author = $author;
            $this->title = str_replace(['"',"'"], "",$title);
            $this->editionNumber = $editionNumber;
            $this->publishPlace = $publishPlace;
            $this->editorial = $editorial;
            $this->pages = $pages;
            $this->notes = $notes;
            $this->year = $year;
            $this->isbn = $isbn;
        }
        else{
            //no llena si uno esta equivocado ^[^'"]*$
            if(preg_match("/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/",$isbn) == false){
                echo "El ISBN no tiene el formato correcto, 0-7645-2641-3";
            }
            elseif(preg_match("/\([^()]+\)/",$year) == false){
                echo "El Year no tiene el formato correcto, (2012)";
            }elseif(preg_match("/\^(\()?(?(1)[^\)\n\r]+[\)]?|[^\s\n\r]+)/",$editionNumber) == false){
                echo "El Numero de Edicion no tiene el formato correcto, algo^3";
            }else{
                echo "Ha ocurrido un error";
            }   
        }
        

    }
    
   
}
    


?>