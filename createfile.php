<?php

if (isset($_POST['valor'])) {
    $myfile = fopen('testfile.txt', 'w');
    fwrite($myfile, $_POST['valor']);

    echo 'se creo el wod';
}
