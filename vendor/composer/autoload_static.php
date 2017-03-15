<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd481f8a2640ff4c5c03a452ca07d1add
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SkyBetTechTest\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SkyBetTechTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'SkyBetTechTest\\APIServer' => __DIR__ . '/../..' . '/includes/APIServer.php',
        'SkyBetTechTest\\Database' => __DIR__ . '/../..' . '/includes/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd481f8a2640ff4c5c03a452ca07d1add::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd481f8a2640ff4c5c03a452ca07d1add::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd481f8a2640ff4c5c03a452ca07d1add::$classMap;

        }, null, ClassLoader::class);
    }
}