<?php

    define('FILE_DIR', 'files/');
    define('FILE_EXT', '.csv');

    function createFilePath($name) {
        return FILE_DIR . $name . FILE_EXT;
    }

?>