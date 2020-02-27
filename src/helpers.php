<?php

    if (!function_exists('debug')) {
        /**
         * Permet de faire un debug
         * @param mixed $data Les données à débuguer
         * @param bool $die S'il faut arrêter le script après le debug ou pas
         * @return void
         */
        function debug($data, $die = true) {
            echo '<pre>';
            print_r($data);
            echo '</pre>';
            
            if ($die) {
                die();
            }
        }
    }