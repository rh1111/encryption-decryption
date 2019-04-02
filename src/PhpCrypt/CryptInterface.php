<?php
/**
 * Created by PhpStorm.
 * User: Rahul Khandelwal <rh1111@rediffmail.com>
 */

namespace PhpCrypt;

use PhpCrypt\Exceptions\DecryptionException;

interface CryptInterface
{
    /**
     * Encrypt text
     * @param string $plainText
     * @return string
     */
    function encrypt($plainText);

    /**
     * Decrypt text
     *
     * @param string $encryptedText
     * @return string
     * @throws DecryptionException
     */
    function decrypt($encryptedText);
}