<?php
                ///Ejercicio 2

$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (5, "The Lord of The Rings", 9, 2001, 7, 2),
        (6, "The GodFather", 10, 1972, 5, 8),
        (7, "TaxiDriver", 11, 1976, 9, 3)';
mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (9,"Fantasy"),
        (10, "Mobster"), 
        (11, "Special")';
mysqli_query($db,$query) or die(mysqli_error($db));

$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Elijah Wood", 1, 0),
        (8, "Francis Ford Coppola", 0, 1),
        (9, "Robert De Niro", 0, 1)';
mysqli_query($db,$query) or die(mysqli_error($db));

echo '¡Datos insertados correctamente!';
?>