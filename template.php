<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title> <?php echo $title; ?> </title>
		<link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
                <link rel="icon" href="https://i.imgur.com/gvSbDaK.png">
	</head>

	<body>
		<div id="wrapper">

                    <div>
                        <h1 align='center'><?php echo $title; ?></h1>
                    </div>

			<nav id="navigation">
				<ul id="nav">
					<li><a href="index">Home</a></li>
					<li><a href="index">Also Home</a></li>
				</ul>
			</nav>

			<div id="content_area">
				<?php echo $content; ?>
			</div>

			<footer>

			</footer>


		</div>
	</body>

</html>
