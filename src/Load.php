<?php

namespace Massfice\Loader;

class Load {
    public static function firstNotNull(Loader... $loaders) {
        foreach($loaders as $loader) {
            @$var = $loader->load();
            if($var !== null) {
                return $var;
            }
        }

        return null;
    }

    public static function andSave(string $key, string $option, Loader... $loaders) {
        @session_start();
        @$var = self::$option(...$loaders);
        $_SESSION[$key] = $var;

        return $var;

    }
}

?>