<?php

/**
 A custom error handler for the tests.
*/
function errorHandler($error_level, $error_message, $error_file,
                      $error_line, $error_context){
    print "Error: $error_message\n";
    print "    at line $error_line in $error_file\n";
    exit(1);
}
set_error_handler("errorHandler");

?>
