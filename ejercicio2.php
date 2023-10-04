<?php
// Conectar a MySQL
$db = mysqli_connect('localhost', 'root', 'root', 'moviesite') or 
    die ('No se puede conectar.');

// Insertar datos en la tabla "movie"
$query = "INSERT INTO movie (movie_name, movie_type, movie_year, movie_leadactor, movie_director)
          VALUES ('Iron Man', 1, 2021, 1, 2),
                 ('Avengers', 2, 2022, 2, 1),
                 ('Jaimeneta', 3, 2023, 3, 3)";
mysqli_query($db, $query) or die(mysqli_error($db));

// Insertar datos en la tabla "movietype"
$query = "INSERT INTO movietype (movietype_label)
          VALUES ('Terror'),
                 ('Risa'),
                 ('Drama')";
mysqli_query($db, $query) or die(mysqli_error($db));

// Insertar datos en la tabla "people"
$query = "INSERT INTO people (people_fullname, people_isactor, people_isdirector)
          VALUES ('Javier Martin', 1, 0),
                 ('Daniel Sanchez', 1, 0),
                 ('Alex de la Iglesia', 0, 1)";
mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Datos insertados';
?>
