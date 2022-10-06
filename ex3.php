<?php
                ///Ejercicio 3

$db = mysqli_connect('localhost', 'root', 'root') or 
die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'SELECT movie_name, p1.people_fullname AS Actor, p2.people_fullname AS Director
        FROM movie m, people AS p1, people AS p2 
        WHERE movie_leadactor = p1.people_id 
        AND movie_director = p2.people_id';
$result = mysqli_query($db,$query) or die(mysqli_error($db));

// show the results
while ($row = mysqli_fetch_assoc($result)) {
extract($row);
echo $movie_name . " - Actor:  " . $Actor  . " - Director: " . $Director . "<br/>" ;
}
?>