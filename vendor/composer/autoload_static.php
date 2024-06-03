<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6c5e26da01c61d10392d20c42b2ebf2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MercadoPago\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MercadoPago\\' => 
        array (
            0 => __DIR__ . '/..' . '/mercadopago/dx-php/src/MercadoPago',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6c5e26da01c61d10392d20c42b2ebf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6c5e26da01c61d10392d20c42b2ebf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc6c5e26da01c61d10392d20c42b2ebf2::$classMap;

        }, null, ClassLoader::class);
    }
}
