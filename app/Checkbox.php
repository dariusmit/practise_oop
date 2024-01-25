<?php

declare(strict_types = 1);

namespace App;

class Checkbox extends Boolean {

    // Paveldi konstruktoriu is boolean klases

    // Override paveldeta konstruktoriu is boolean klases
    public function render() {
        return <<<HTML
<input type="checkbox" name="$this->name" />
HTML;
    }

}

?>
