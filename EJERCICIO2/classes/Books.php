<?php 
    class Books{
        private $books = array();

        /**
         * @return mixed
         */
        public function getBooks() {    
            return $this->books;
        }
        
        /**
         * @param mixed $books
         * @return self
         */
        public function setBooks($book): self {
            if ($book instanceof Book){
                $this->books[] = $book;
                return $this;
            }
            return $this;
        }
    }
?>