<?php

$fixture = array();
assertTrue(count($fixture) == 0);
 
$fixture[] = 'element';
assertTrue(count($fixture) == 1);
 
function assertTrue($condition)
{
    if (!$condition) {
        throw new Exception('Assertion failed.');
    }
}
?>