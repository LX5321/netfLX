<?php
$dirs = array_filter(glob('*'), 'is_dir');
$val = count($dirs);
//echo "Folders: ",$val;
for ($x=1;$x<=$val;$x++) {
    echo "<br/>".$dirs[$x];
}
?>
