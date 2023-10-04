<?php
// Conéctate a la base de datos MySQL
$db = mysqli_connect('localhost', 'root', 'root', 'moviesite') or die('No se puede conectar. Verifica los parámetros de conexión.');

// Define la consulta SQL para obtener el nombre del director y el actor principal de cada película
$query = "SELECT m.movie_name AS Pelicula, p1.people_fullname AS Director, p2.people_fullname AS ActorPrincipal
          FROM movie AS m
          LEFT JOIN people AS p1 ON m.movie_director = p1.people_id
          LEFT JOIN people AS p2 ON m.movie_leadactor = p2.people_id";

$result = mysqli_query($db, $query) or die(mysqli_error($db));

// Imprime los resultados
echo '<table>';
echo '<tr><th>Película</th><th>Director</th><th>Actor Principal</th></tr>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . $row['Pelicula'] . '</td>';
    echo '<td>' . $row['Director'] . '</td>';
    echo '<td>' . $row['ActorPrincipal'] . '</td>';
    echo '</tr>';
}
echo '</table>';

// Cierra la conexión a la base de datos
mysqli_close($db);
?>