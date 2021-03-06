<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit538ab6883c7671976baa14569f9ead33
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpssdb\\' => 8,
            'phpFastCache\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Cache\\' => 10,
            'Predis\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpssdb\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpfastcache/phpssdb/src/phpssdb',
        ),
        'phpFastCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpfastcache/phpfastcache/src/phpFastCache',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Predis\\' => 
        array (
            0 => __DIR__ . '/..' . '/predis/predis/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Unirest\\' => 
            array (
                0 => __DIR__ . '/..' . '/mashape/unirest-php/src',
            ),
        ),
        'I' => 
        array (
            'InstagramScraper' => 
            array (
                0 => __DIR__ . '/..' . '/raiym/instagram-php-scraper/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit538ab6883c7671976baa14569f9ead33::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit538ab6883c7671976baa14569f9ead33::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit538ab6883c7671976baa14569f9ead33::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
