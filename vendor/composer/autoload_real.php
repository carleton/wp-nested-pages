<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb296526ef130ebb2d1ebdff13f0ac78b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb296526ef130ebb2d1ebdff13f0ac78b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb296526ef130ebb2d1ebdff13f0ac78b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb296526ef130ebb2d1ebdff13f0ac78b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}