<?php

    define('FILE_DIR', 'files/');
    define('FILE_EXT', '.csv');
    define('FILE_HEADER', 'file');

    function createFilePath($name) {
        return FILE_DIR . $name . FILE_EXT;
    }

?>