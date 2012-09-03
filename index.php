<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<body>
		<div id="content">
			<?php
				getDirectory('./');
			?>
		</div>
	</body>
</html>
<?php
	function getDirectory( $path = '.', $level = 0 )
	{
		// Directories to ignore when listing output.
		$ignore = array( '.', '..' );

		// Open the directory to the handle $dh
		$dh = @opendir( $path );

		// Loop through the directory
		while( false !== ( $file = readdir( $dh ) ) )
		{
			// Check that this file is not to be ignored
			if( !in_array( $file, $ignore ) )
			{
				// Indent spacing for better view
				$spaces = str_repeat( '&nbsp;', ( $level * 5 ) );

				// Show directories only
				if(is_dir( "$path/$file" ) )
				{
					// Re-call this same function but on a new directory.
					// this is what makes function recursive.
					$desc = file("$path$file/desc.txt");
					echo "<div id='item'><div id='img'></div><div id='article'><a href='$path$file/'>$desc[0]</a><br /></div>";
					echo("\n<div id='desc'>");
					print_r($desc[1]);
					echo("</div></div><br/><br/>");
				}
			}
		}
		// Close the directory handle
		closedir( $dh );
	} 
?>