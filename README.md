# php-crypt

Cryptography tools for PHP projects

## Documentation

### Overview

PhpCrypt is a lightweight package for **encrypting**, **decrypting**.
It uses PHP OpenSSL extension and let's you to use your custom security key.

### Installation (via Composer)

Run following command in your project root directory:

```
composer require phpcrypt:3.*
```

### Getting Started

It's so easy to work with PhpCrypt! Just take a look at following example:

```
use \PhpCrypt\CryptFactory;

$crypt = CryptFactory::create();
echo $crypt->encrypt("This is an important content!");
```

### Encryption

The `encrypt()` method encrypts data. See following example.

```
use \PhpCrypt\CryptFactory;

$crypt = CryptFactory::create();
echo $crypt->encrypt("This is an important content!");
```

* Encrypted data will be encoded via base64 algorithm to be maintainable easily anywhere.
* PhpCrypt would generate a key automatically when there was not anyone.

### Decryption

The `decrypt()` method decrypts data. See following example.

```
use \PhpCrypt\CryptFactory;

$crypt = CryptFactory::create();
$r = $crypt->encrypt("This is an important content!");
echo $crypt->decrypt($r);
```

*   Don't forget to set the same key you have used to encrypting the data.

### Key

PhpCrypt uses a secret key to encrypt and decrypt data.
You can pass this key to `Crypt` instances or let it to generates a random one.
To get the generated key, you can call `getKey()` method.
To set your custom key, you can call `setKey()` method or pass it via constructor.

You must keep the key and use it for whole the project lifetime.

Following examples show how to set the security key with constructor and setter respectively:

```
use \PhpCrypt\CryptFactory;

$crypt = CryptFactory::create(" THIS IS THE SECRET KEY");
$r = $crypt->encrypt("This is the content!");
echo $crypt->decrypt($r);
```

```
use \PhpCrypt\CryptFactory;

$crypt = CryptFactory::create();
$crypt->setKey(" THIS IS THE SECRET KEY ");
$r = $crypt->encrypt("This is the content!");
echo $crypt->decrypt($r);
```

*   Default cipher method is `AES-256-CBC`.

### Cipher Methods

Cypher methods are algorithms to encrypt data.
PHP OpenSSL extension supports multi cipher methods.
In default, PhpCrypt uses `AES-256-CBC` method.
To see all supported cipher methods you can call following method:

```
$crypt->availableMethods();
```

To set your desired cipher method, use following method:

```
$crypt->setMethod('AES-192-CBC');
```


### Framework Integration

You can install the package using Composer.
While all of modern PHP frameworks supports Composer packages,
you are able to use it in the most of popular frameworks easily.
# encryption-decryption