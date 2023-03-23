<?php include_once('classes/Book.php'); include_once('classes/Books.php');?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ejercicio 2 </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="cointainer">
            <div class="row py-5">
                <div class="col-md-10 offset-md-1 p-5 bg-light border rounded-3 text-center">
                    <h2 class="">Resultados:</h2>
                    
                    <?php
                        if(isset($_POST['submit'])){
                            $author = isset($_POST['author']) ? $_POST['author']: '';
                            $title = isset($_POST['title']) ? $_POST['title']: '';
                            $numberEdition = isset($_POST['numberEdition']) ? $_POST['numberEdition']: '';
                            $publishPlace = isset($_POST['publishPlace']) ? $_POST['publishPlace']: '';
                            $editorial = isset($_POST['editorial']) ? $_POST['editorial']: '';
                            $year = isset($_POST['year']) ? $_POST['year']: '';
                            $pages = isset($_POST['pages']) ? $_POST['pages']: '';
                            $notes = isset($_POST['notes']) ? $_POST['notes']: '';
                            $isbn = isset($_POST['isbn']) ? $_POST['isbn']: '';
                            
                            $libro = new Book($author,$title,$numberEdition,$publishPlace,$editorial,$year,$pages,$notes,$isbn);
                            //0-7645-2641-3
                            //var_dump(preg_match('/"((?:[^"]|\\\\.)*)"/',"'fefefe'"));
                            //var_dump(preg_match("/\^(\()?(?(1)[^\)\n\r]+[\)]?|[^\s\n\r]+)/",''));
                            //var_dump(preg_match("/\([^()]+\)/","2012"));
                            $libros = new Books();
                            $libros->setBooks($libro);
                        }
                        //var_dump(empty($libro->author));
                        if(!empty($libro->author)){

                        
                    ?>
                    <table class="table table-striped mt-5">
                        <thead>
                            <tr>
                            <th scope="col">Autor</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Numero de Edicion</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Año</th>
                            <th scope="col">Paginas</th>
                            <th scope="col">Notas</th>
                            <th scope="col">ISBN</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($libros->getBooks() as $key => $value)
                            {
                        ?>
                        <tr> 
                            <td>
                                <?php
                                    echo $value->author;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->title;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->editionNumber;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->editorial;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->year;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->pages;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->notes;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $value->isbn;
                                ?>
                            </td>
                        </tr>
                        
                        <?php
                            }
                        }else{
                            //
                        }
                        ?>
                        
                        
                    </table>
                    <div class="row py-4">
                        <div class="col-12 text-center">
                            <a href="form.html" class="btn btn-primary">Ingresar Otro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>