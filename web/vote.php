<html>
	<head>
		<title>
			Movie Voter | Voting Page
		</title>
	</head>
	<body>
		<div>
			<table>
				<tr>
					<td>
						<img src="img/worldsend.jpg" alt="The World's End Movie Poster" width="327"/>
					</td>
					<td>
						<h1>
							The World's End
						</h1>
						<p>
							Five friends who reunite in an attempt to top their epic pub crawl from 20 years earlier unwittingly become humankind's only hope for survival.
								<BR />
							Director: Edgar Wright
								<BR />
							Writers: Simon Pegg, Edgar Wright
								<BR />
							Stars: Simon Pegg, Nick Frost, Martin Freeman
						</p>
					<td>
				</tr>
				<tr>
					<td>
						<center>
						<a href='http://www.imdb.com/title/tt1213663/'>
							<img src="img/imdb.png" alt="IMDb Database entry for 'The World's End'" width="100px"/>
						</a> <img src="img/metascore.png" height=100px width=100px />
					</center>
					</td>
					<td>
						<img src="img/Vote.png" onmouseover="this.src='img/voteh.png'" onmouseout="this.src='img/Vote.png'" />
				</tr>
			</table>
			<hr />
		</div>

		<?php
			$title = ("Captain Phillips");
			$raw = file_get_contents('http://www.omdbapi.com/?t=' . urlencode($title));
			$jsonArray = json_decode($raw, true);
			echo "<img src='" . $jsonArray['Poster'] . "' alt='Poster for " . $title . "' width=327px/>";
	?>
	</body>
</html>