<?php

// $teste = [];
$teste = new SplFixedArray(10);

for($i = 0; $i < 10; $i++) {
    $teste[$i] = $i;
}

var_dump(memory_get_usage() / 1024 / 1024);