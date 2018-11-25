<?php
/**
 * Automate the setup of the freshest version of ClassicPress
 */

/* Install WordPress

//** Download ClassicPress from Git
ds_cli_exec( "git clone https://github.com/ClassicPress/ClassicPress-release.git  wp-content/themes/ClassicPress-release-master/");


/** Check if index.php unpacked okay */
if ( is_file( "index.php" ) ) {

	/** Cleanup the empty folder, download, and this script. */
	ds_cli_exec( "rm blueprint.php" );
	ds_cli_exec( "rm index.htm" );
}
