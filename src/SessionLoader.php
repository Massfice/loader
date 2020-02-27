<?php

namespace Massfice\Loader;

class SessionLoader extends KeyLoader {
    public function load() {
        session_start();
        return $_SESSION[$this->key];
    }
}

?>