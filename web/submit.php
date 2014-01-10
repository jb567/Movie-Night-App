<?php

	$conn = pg_connect("dbname=movie host=localhost user=movie password=movie");
	
	$movie_id = $_GET['select'];
	
	if (pg_fetch_row(pg_query($conn, "SELECT * FROM votestally WHERE " . $movie_id . " = movie_id" )){
		pg_query($conn, "INSERT INTO votestally (movie_id, count) VALUES (". $movie_id . ", 1)");
	}else{

	
		$count = pg_fetch_object(pg_query($conn, "SELECT count FROM votestally WHERE " . $movie_id . " = movie_id");
		pg_querry($conn, "UPDATE INTO votestally ") 

	}

?>
