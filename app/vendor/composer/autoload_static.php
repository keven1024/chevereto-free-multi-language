<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83fb52ae7038d92fe8cc0f8a8a582fce
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'I' => 
        array (
            'IPLib\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'IPLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/mlocati/ip-lib/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'URLify' => 
            array (
                0 => __DIR__ . '/..' . '/jbroadway/urlify',
            ),
        ),
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Detection\\MobileDetect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced/Detection/MobileDetect.php',
        'IPLib\\Address\\AddressInterface' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Address/AddressInterface.php',
        'IPLib\\Address\\AssignedRange' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Address/AssignedRange.php',
        'IPLib\\Address\\IPv4' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Address/IPv4.php',
        'IPLib\\Address\\IPv6' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Address/IPv6.php',
        'IPLib\\Address\\Type' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Address/Type.php',
        'IPLib\\Factory' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Factory.php',
        'IPLib\\ParseStringFlag' => __DIR__ . '/..' . '/mlocati/ip-lib/src/ParseStringFlag.php',
        'IPLib\\Range\\AbstractRange' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Range/AbstractRange.php',
        'IPLib\\Range\\Pattern' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Range/Pattern.php',
        'IPLib\\Range\\RangeInterface' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Range/RangeInterface.php',
        'IPLib\\Range\\Single' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Range/Single.php',
        'IPLib\\Range\\Subnet' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Range/Subnet.php',
        'IPLib\\Range\\Type' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Range/Type.php',
        'IPLib\\Service\\BinaryMath' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Service/BinaryMath.php',
        'IPLib\\Service\\RangesFromBoundaryCalculator' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Service/RangesFromBoundaryCalculator.php',
        'IPLib\\Service\\UnsignedIntegerMath' => __DIR__ . '/..' . '/mlocati/ip-lib/src/Service/UnsignedIntegerMath.php',
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
        'PHPMailer\\PHPMailer\\Exception' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/Exception.php',
        'PHPMailer\\PHPMailer\\OAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/OAuth.php',
        'PHPMailer\\PHPMailer\\PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/PHPMailer.php',
        'PHPMailer\\PHPMailer\\POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/POP3.php',
        'PHPMailer\\PHPMailer\\SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/src/SMTP.php',
        'TijsVerkoyen\\Akismet\\Akismet' => __DIR__ . '/..' . '/tijsverkoyen/akismet/Akismet.php',
        'TijsVerkoyen\\Akismet\\Exception' => __DIR__ . '/..' . '/tijsverkoyen/akismet/Exception.php',
        'URLify' => __DIR__ . '/..' . '/jbroadway/urlify/URLify.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83fb52ae7038d92fe8cc0f8a8a582fce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83fb52ae7038d92fe8cc0f8a8a582fce::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit83fb52ae7038d92fe8cc0f8a8a582fce::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit83fb52ae7038d92fe8cc0f8a8a582fce::$classMap;

        }, null, ClassLoader::class);
    }
}
