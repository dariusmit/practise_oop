<?php

declare (strict_types = 1);

//Itraukiam composer autoloaderi
//Autoloaderis neveikia, need to fix that
require __DIR__ . '/../vendor/autoload.php';

//require __DIR__ . '/../app/Field/Field.php';
//require __DIR__ . '/../app/Text/Text.php';
//require __DIR__ . '/../app/Boolean/Boolean.php';
//require __DIR__ . '/../app/Checkbox/Checkbox.php';
//require __DIR__ . '/../app/Radio/Radio.php';


//echo 'PHP version: ' . phpversion();

$fields = [
    new \App\Text('textField'),
    new \App\Checkbox('checkboxField'),
    new \App\Radio('radioField')
];

foreach ($fields as $field) {
    echo $field->render() . '<br />';
}

?>
