<?php

error_reporting(E_ALL);

/**
 * @param string $class_name
 */
function autoload(string $class_name): void {
    if (empty($class_name)) {
        return;
    }
    require_once($class_name . '.php');
}

spl_autoload_register('autoload');
echo '<pre>';
echo "integery:<br>";
$integers = (new IntegerGenerator)->generate(5);
print_r($integers);
echo '<br>';
echo "stringi:<br>";
$strings = (new StringGenerator)->generate(5);
print_r($strings);
echo '<br>';
echo "emaile:<br>";
$emails = (new EmailGenerator)->generate(5);
print_r($emails);
echo '</pre>';

