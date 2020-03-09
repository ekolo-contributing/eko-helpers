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

    if (!function_exists('is_tel')) {
        /**
         * Véririfie si c'est un numéro de téléphone
         * @param mixed $tel Le numéro de téléphone à vérifier
         * @return bool
         */
		function is_tel($tel) {
			if (is_numeric($tel)) {
				if (strlen($tel) <= 15) {
                    if (preg_match('#^\+([1-9]){1}([0-9]){11,}#', $tel)) {
                        return true;
                    }

                    if (strlen($tel) === 10) {
                        if (preg_match('#^0([1-9]){1}([0-9]){8}#', $tel)) {
                            return true;
                        }
                    }
                }
			}
			
			return false;
		}
	}