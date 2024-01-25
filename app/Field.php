<?php

declare(strict_types = 1);

namespace App;

// Abstract classes are sort of a template for child classes to extend from. They cannot be instantiated
abstract class Field {

    // Original class

    public function __construct(protected string $name) {

    }

    // Child class must have implementation for this method
    abstract public function render();

}

?>
