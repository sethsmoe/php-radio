<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title id="pageTitle">Music Player</title>
		<link href="/icons/sound2.png" type="image/png" rel="shortcut icon"/>
		<link href="player.css" type="text/css" rel="stylesheet"/>
		<script src="playlist.php" type="application/javascript" charset="UTF-8"></script>
		<script src="player.js" type="application/javascript" charset="UTF-8"></script>
	</head>
	<body onload="init();">
	<?php
		$q=array(
			'The feds want my beans',
			'The feds want my waifu',
			'The feds want my doujinshi',
			'No loli here, officer',
			'Aeternum inane',
			'404 Funny not found.',
			'403 Funny denied.',
			'Ghetto ass music player',
			'You were dropped as a child',
			'The terrorist known as 22chan',
			'The terrorist known as me, bitch',
			'The terrorist group known as ROSE',
			'set +o history;history -d `history| awk "END{print $1}"`',
			'i control the world (and some funky tunes)',
			'What if you, wanted to go to heaven?',
			'A S C E N D E D',
			'hentai',
			'regenerativly degenerative',
		)
	?>

	<div id="banner">
		<div id="bannercont"><h1>seth's music player 2.0</h1><p><?php echo($q[array_rand($q)]); ?></p></div>
	</div>
	<div id="footer">
		<p style="float:left;">Hosting <span><?php system('find . |wc -l');?></span> tracks, using <span><?php echo(exec("du -bsh tracks/ | awk '{print $1}'"));?>B</span> on <span>/dev/sda1</span></p>
		<p style="float:right;">Its not illegal i swear!</p>
	</div> <!-- yes, the footer is at the top. deal with it. -->
	<div id="fucking-everything">
	<div id="console">
		<div id="player">
			<img id="cover" alt="img"/>
			<div id="pwrap">
				<p id="title"></p>
				<div id="waud">
					<audio id="audio" autoplay>y the fuck your browser so old</audio>
					<input id="back" type="button" value="<<"/>
					<input id="next" type="button" value=">>"/>
				</div>
				<p id="error" title="Click to hide"></p>
				<div id="opts">
					<div class="opt"><span>Shuffle: <input id="shuffle" type="checkbox"/></span></div>
					<div class="opt"><span>Repeat: <input id="repeat" type="checkbox"/></span></div>
					<div class="opt"><span>Loop: <input id="loop" type="checkbox"/></span></div>
				</div>
			</div>
		</div>


		<div id="tab_container" class="playlist">
			<div id="tabs">
				<div class="playlist">Library</div>
				<div class="find">Search</div>
				<div class="hst">History</div>
			</div>
			<span id="shit">
				<span>Track </span><span>Action: </span><select id="action">
					<option>Play</option>
					<option>Enqueue</option>
				</select>
			</span>
			<div id="tab_content">
				<div id="playlist"></div>
				<div id="find">
					<form action="#" name="search">
						Find: <input type="text" name="str"/>
						<span><input type="checkbox" name="case"/><span onclick="this.previousSibling.click()"> Case Sensitive</span></span>
						<br/>
						Match <select name="match"/>
							<option value="name">File Name</option>
							<option value="path">Full Path</option>
						</select>
						<input type="submit" value="Find"/>
					</form>
					<hr/>
					<ul id="search"></ul>
				</div>
				<div id="hst">
					Current loaded track: <span id="index"></span>
					<ol id="queue"></ol>
				</div>
			</div>
		</div>
	<!--<br/><div id="debugHst"></div>-->
</div>
</div>
</body>
</html>
