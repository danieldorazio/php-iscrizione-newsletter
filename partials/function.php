<?php
function emailValidator($emailArray)
{
    $flag_point = false;
    $flag_snail = false;
    $result = '';
    for ($i = 0; $i < count($emailArray); $i++) {

        if ($emailArray[$i] != ' ') {

            if ($emailArray[$i] === '.' || $flag_point) {
                $flag_point = true;

                if ($emailArray[$i] === '@' || $flag_snail) {
                    $flag_snail === true;
                    $result = 'email valida';
                } else {
                    $result = 'emial non contiene la chiocciola';
                }
            } else {
                $result = 'email non contine punti';
            }
        } else {
            $result = 'email contine spazi';
        }
    }
    return $result;
};
