<?php
    include "test-lib.php";

    /* Here we are including 3d party PHP library
     by relative path which will be searched among
     include_path items from the php.ini:
    */
    include "Services/JSON.php";

    $json = new Services_JSON();
    $value = array('foo', 'bar', array(1, 2, 'baz'), array(3, array(4)));
    $output = $json->encode($value);
    print "$output\n";
    print "Example test using 3dparty library done!\n";
    exit(0)
?>
