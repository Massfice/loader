<?php

namespace Massfice\Loader;

abstract class KeyLoader implements Loader {
    protected $key;

    public function __construct(string $key) {
        $this->key = $key;
    }

    abstract public function load();
}

?>