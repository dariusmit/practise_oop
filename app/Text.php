<?php

declare(strict_types = 1);

namespace App;

class Text extends Field {

    // Inherits original constructor method

    // Overrides original render method
    public function render() {
        return <<<HTML
<input type="text" name="$this->name" />
HTML;
    }

}

?>
