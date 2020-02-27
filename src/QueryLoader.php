<?php

namespace Massfice\Loader;

class QueryLoader extends KeyLoader {
    public function load() {
        return $_REQUEST[$this->key];
    }
}

?>