<!--delete based on movie id, execute the query defined database.php -->
<?php
if (isset($_POST['id']) && isset($_POST['id']) != "") {
    require '../../database.php';
    $movie_id = $_POST['id'];

    $connection->movieDelete($movie_id);
}
?>