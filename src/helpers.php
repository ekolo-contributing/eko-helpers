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

    if (!function_exists('is_email_valid')) {
        /**
         * Vérifie si l'email passé en paramètre est valide
         * @param string $email L'adresse email en question
         * @return bool
         */
        function is_email_valid(string $email) {
            return filter_var($email, FILTER_VALIDATE_EMAIL);
        }
    }

    if (!function_exists('make_to_pluriel')) {
        /**
         * Permet de renvoyé un 's' si la valeur passé est > 1
         * @param mixed $value
         * @return string
         */
        function make_to_pluriel($value) {
            return $value > 1 ? 's' : '';
        }
    }

    if (!function_exists('is_int_valid')) {
        /**
         * Vérifie si la valeur passée en paramètre est réellement un entier
         * @param mixed $value La valeur à vérifier
         * @return boolean
         */
        function is_int_valid($value) {
            $value = (int) $value;

            if ($value > 0) {
                return true;
            }

            return false;
        }
    }