<?php
// This checks if your server is showing errors
if ( ini_get('display_errors') == 1 ) {
    echo "display_errors = 1\n";
    echo "It is all good...\n";
} else {
    echo "display_errors is not set...\n";
}
?>