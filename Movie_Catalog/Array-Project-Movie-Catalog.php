<?php
$dir_movies = 'C:\xampp\htdocs\Movie_Catalog\cover-movies';
$resources = scandir($dir_movies);

function pre_r($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
$resources = array_diff($resources, array('..','.'));
 
$resources = array_values($resources);


$movies = array();

for ($i = 0; $i < count($resources); $i++) {
    preg_match("!(.*?)\((.*?)\)!",$resources[$i],$results);
    $movie_name = str_replace('_', ' ',$results[1]);
    $movie_name = ucwords($movie_name);

    $movies[$movie_name]['image'] = $resources[$i];
    $movies[$movie_name]['year'] = $results[2];
}

echo "<table id = 'movies' cellpadding = 50>";
echo "<tr class = 'odd'>";

foreach($movies as $movie_name => $info){
    $content = "<td><span class = 'name'>$movie_name</span><br />" . "<img src = 'cover-movies/$info[image]'><br /> " . "<span class = 'year'>( $info[year] )</span></td>";
    echo $content;
}
echo "</tr></table>"
?>

<style>
    #movies {
        background-color:  #000;
        color: #fff;
        font: 11pt Calibri;
    }
    img {
        width: 300px;
    }
    tr.header {
        background-color: #111f4e;
        color: #fff;
        font: bold 11pt Calibri;
    }
    tr.odd {
        background-color: #000000;
    }
    tr.even {
        background-color: 141423;
    }
    img {
        padding: 10px;
    }
    td {
        text-align: center;
    }
    span.year {
        color: #ccc;
        font-size: 18px;
    }
    span.name {
        font-size: 26px;
        font-weight: bold;
    }
    body {
        margin: 0;
        padding: 0;
    }
</style>

