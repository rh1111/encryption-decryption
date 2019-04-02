<?php
/**
 * Created by PhpStorm.
 * User: Rahul Khandelwal <rh1111@rediffmail.com>
 */

namespace PhpCrypt;
use PhpCrypt\Crypt;

class CryptFactory
{
    /**
     * Create object of Crypt
     * @param string $plainText
     * @return string
     */
    public static function create($key = null, $method = 'AES-256-CBC')
    {
        return new Crypt($key, $method);
    }
}