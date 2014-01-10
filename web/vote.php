
	<?php

		error_reporting(E_ALL);
		ini_set('display_errors', TRUE);
		ini_set('display_startup_errors', TRUE);
		// can I haz database
		$conn = pg_connect("dbname=movie host=localhost user=movie password=movie");
		$mlist = pg_query($conn, "SELECT * FROM movies");
	?>
	<head>
		<title>
			Movie Voter | Voting Page
		</title>
	</head>
	<body>
		<form action="submit.php" method="GET">
		<?php

			while ($movie = pg_fetch_object ($mlist)){
				$title = $movie->title;
				$raw = file_get_contents('http://www.omdbapi.com/?t=' . urlencode($title));
				$jsonArray = json_decode($raw, true);
				echo "<img src='" . $jsonArray['Poster'] . "' alt='Poster for " . $title . "' width=327px/>";
				echo "<p>" . $jsonArray['Plot'] . "</p>";
				echo "<p class='actors'> <span class'starring'>Starring: </span>" . $jsonArray['Actors'] . "</p>";
				echo "<p class='directors'><span class='directed'>Directed by: </span>" . $jsonArray['Director'] . "</p>";
				echo "<p class='writers'><span class='written'>Written by: </span>" . $jsonArray['Writer'] . "</p>";
				echo "<p class='genre'><span class='genred'>Genre(s): </span>" . $jsonArray['Genre'] . "</p>";
				echo "<p class='metascore'><span class='metascored'>Metascore: </span>" . $jsonArray['Metascore'] . "</p>";
				echo "<p class='vote'><input type='radio' name='select' id='vote-" . $jsonArray['Title'] . "' value='" . $jsonArray['Title'] . "'/></p>";
				echo "<hr />";
			}
		?>
		<input type="submit" value="submit" />
		</form>
	</body>
</html>
