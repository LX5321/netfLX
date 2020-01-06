<?php

function getList($directory) {
    $dirs = array_filter(glob($directory), 'is_dir');
    for ($x=0;$x<count($dirs);$x++) {
    echo "<br/>".$dirs[$x];
    }
}

?>