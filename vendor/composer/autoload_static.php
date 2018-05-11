<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit560f5131ba35ccbe0906be0aed9ee6bd
{
    public static $files = array (
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
        '841780ea2e1d6545ea3a253239d59c05' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'WeOpen\\' => 7,
            'WeMini\\' => 7,
            'WeChat\\' => 7,
        ),
        'S' => 
        array (
            'Symfony\\Component\\OptionsResolver\\' => 34,
        ),
        'Q' => 
        array (
            'Qiniu\\' => 6,
        ),
        'O' => 
        array (
            'OSS\\' => 4,
        ),
        'E' => 
        array (
            'Endroid\\QrCode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'WeOpen\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen',
        ),
        'WeMini\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini',
            1 => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini',
        ),
        'WeChat\\' => 
        array (
            0 => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat',
        ),
        'Symfony\\Component\\OptionsResolver\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/options-resolver',
        ),
        'Qiniu\\' => 
        array (
            0 => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu',
        ),
        'OSS\\' => 
        array (
            0 => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS',
        ),
        'Endroid\\QrCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/endroid/qr-code/src',
        ),
    );

    public static $classMap = array (
        'Endroid\\QrCode\\Bundle\\Controller\\QrCodeController' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/Controller/QrCodeController.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\Configuration' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/DependencyInjection/Configuration.php',
        'Endroid\\QrCode\\Bundle\\DependencyInjection\\EndroidQrCodeExtension' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/DependencyInjection/EndroidQrCodeExtension.php',
        'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/EndroidQrCodeBundle.php',
        'Endroid\\QrCode\\Bundle\\Twig\\Extension\\QrCodeExtension' => __DIR__ . '/..' . '/endroid/qr-code/src/Bundle/Twig/Extension/QrCodeExtension.php',
        'Endroid\\QrCode\\Exceptions\\DataDoesntExistsException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/DataDoesntExistsException.php',
        'Endroid\\QrCode\\Exceptions\\FreeTypeLibraryMissingException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/FreeTypeLibraryMissingException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionFailedException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageFunctionFailedException.php',
        'Endroid\\QrCode\\Exceptions\\ImageFunctionUnknownException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageFunctionUnknownException.php',
        'Endroid\\QrCode\\Exceptions\\ImageSizeTooLargeException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageSizeTooLargeException.php',
        'Endroid\\QrCode\\Exceptions\\ImageTypeInvalidException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/ImageTypeInvalidException.php',
        'Endroid\\QrCode\\Exceptions\\VersionTooLargeException' => __DIR__ . '/..' . '/endroid/qr-code/src/Exceptions/VersionTooLargeException.php',
        'Endroid\\QrCode\\Factory\\QrCodeFactory' => __DIR__ . '/..' . '/endroid/qr-code/src/Factory/QrCodeFactory.php',
        'Endroid\\QrCode\\QrCode' => __DIR__ . '/..' . '/endroid/qr-code/src/QrCode.php',
        'Ip2Region' => __DIR__ . '/..' . '/zoujingli/ip2region/Ip2Region.php',
        'OSS\\Core\\MimeTypes' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/MimeTypes.php',
        'OSS\\Core\\OssException' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssException.php',
        'OSS\\Core\\OssUtil' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Core/OssUtil.php',
        'OSS\\Http\\RequestCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore.php',
        'OSS\\Http\\RequestCore_Exception' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/RequestCore_Exception.php',
        'OSS\\Http\\ResponseCore' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Http/ResponseCore.php',
        'OSS\\Model\\BucketInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketInfo.php',
        'OSS\\Model\\BucketListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/BucketListInfo.php',
        'OSS\\Model\\CnameConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CnameConfig.php',
        'OSS\\Model\\CorsConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsConfig.php',
        'OSS\\Model\\CorsRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/CorsRule.php',
        'OSS\\Model\\GetLiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelHistory.php',
        'OSS\\Model\\GetLiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelInfo.php',
        'OSS\\Model\\GetLiveChannelStatus' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/GetLiveChannelStatus.php',
        'OSS\\Model\\LifecycleAction' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleAction.php',
        'OSS\\Model\\LifecycleConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleConfig.php',
        'OSS\\Model\\LifecycleRule' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LifecycleRule.php',
        'OSS\\Model\\ListMultipartUploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListMultipartUploadInfo.php',
        'OSS\\Model\\ListPartsInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ListPartsInfo.php',
        'OSS\\Model\\LiveChannelConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelConfig.php',
        'OSS\\Model\\LiveChannelHistory' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelHistory.php',
        'OSS\\Model\\LiveChannelInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelInfo.php',
        'OSS\\Model\\LiveChannelListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LiveChannelListInfo.php',
        'OSS\\Model\\LoggingConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/LoggingConfig.php',
        'OSS\\Model\\ObjectInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectInfo.php',
        'OSS\\Model\\ObjectListInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/ObjectListInfo.php',
        'OSS\\Model\\PartInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PartInfo.php',
        'OSS\\Model\\PrefixInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/PrefixInfo.php',
        'OSS\\Model\\RefererConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/RefererConfig.php',
        'OSS\\Model\\StorageCapacityConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/StorageCapacityConfig.php',
        'OSS\\Model\\UploadInfo' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/UploadInfo.php',
        'OSS\\Model\\WebsiteConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/WebsiteConfig.php',
        'OSS\\Model\\XmlConfig' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Model/XmlConfig.php',
        'OSS\\OssClient' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/OssClient.php',
        'OSS\\Result\\AclResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AclResult.php',
        'OSS\\Result\\AppendResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/AppendResult.php',
        'OSS\\Result\\BodyResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/BodyResult.php',
        'OSS\\Result\\CallbackResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CallbackResult.php',
        'OSS\\Result\\CopyObjectResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/CopyObjectResult.php',
        'OSS\\Result\\DeleteObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/DeleteObjectsResult.php',
        'OSS\\Result\\ExistResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ExistResult.php',
        'OSS\\Result\\GetCnameResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCnameResult.php',
        'OSS\\Result\\GetCorsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetCorsResult.php',
        'OSS\\Result\\GetLifecycleResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLifecycleResult.php',
        'OSS\\Result\\GetLiveChannelHistoryResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelHistoryResult.php',
        'OSS\\Result\\GetLiveChannelInfoResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelInfoResult.php',
        'OSS\\Result\\GetLiveChannelStatusResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLiveChannelStatusResult.php',
        'OSS\\Result\\GetLocationResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLocationResult.php',
        'OSS\\Result\\GetLoggingResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetLoggingResult.php',
        'OSS\\Result\\GetRefererResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetRefererResult.php',
        'OSS\\Result\\GetStorageCapacityResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetStorageCapacityResult.php',
        'OSS\\Result\\GetWebsiteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/GetWebsiteResult.php',
        'OSS\\Result\\HeaderResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/HeaderResult.php',
        'OSS\\Result\\InitiateMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/InitiateMultipartUploadResult.php',
        'OSS\\Result\\ListBucketsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListBucketsResult.php',
        'OSS\\Result\\ListLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListLiveChannelResult.php',
        'OSS\\Result\\ListMultipartUploadResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListMultipartUploadResult.php',
        'OSS\\Result\\ListObjectsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListObjectsResult.php',
        'OSS\\Result\\ListPartsResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/ListPartsResult.php',
        'OSS\\Result\\PutLiveChannelResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutLiveChannelResult.php',
        'OSS\\Result\\PutSetDeleteResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/PutSetDeleteResult.php',
        'OSS\\Result\\Result' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/Result.php',
        'OSS\\Result\\SymlinkResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/SymlinkResult.php',
        'OSS\\Result\\UploadPartResult' => __DIR__ . '/..' . '/aliyuncs/oss-sdk-php/src/OSS/Result/UploadPartResult.php',
        'Qiniu\\Auth' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Auth.php',
        'Qiniu\\Cdn\\CdnManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Cdn/CdnManager.php',
        'Qiniu\\Config' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Config.php',
        'Qiniu\\Etag' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Etag.php',
        'Qiniu\\Http\\Client' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Client.php',
        'Qiniu\\Http\\Error' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Error.php',
        'Qiniu\\Http\\Request' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Request.php',
        'Qiniu\\Http\\Response' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Http/Response.php',
        'Qiniu\\Processing\\ImageUrlBuilder' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/ImageUrlBuilder.php',
        'Qiniu\\Processing\\Operation' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/Operation.php',
        'Qiniu\\Processing\\PersistentFop' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Processing/PersistentFop.php',
        'Qiniu\\Rtc\\AppClient' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Rtc/AppClient.php',
        'Qiniu\\Storage\\BucketManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/BucketManager.php',
        'Qiniu\\Storage\\FormUploader' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/FormUploader.php',
        'Qiniu\\Storage\\ResumeUploader' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/ResumeUploader.php',
        'Qiniu\\Storage\\UploadManager' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Storage/UploadManager.php',
        'Qiniu\\Zone' => __DIR__ . '/..' . '/qiniu/php-sdk/src/Qiniu/Zone.php',
        'Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector' => __DIR__ . '/..' . '/symfony/options-resolver/Debug/OptionsResolverIntrospector.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\AccessException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/AccessException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/ExceptionInterface.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/MissingOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoConfigurationException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\NoSuchOptionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/NoSuchOptionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\OptionDefinitionException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/OptionDefinitionException.php',
        'Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException' => __DIR__ . '/..' . '/symfony/options-resolver/Exception/UndefinedOptionsException.php',
        'Symfony\\Component\\OptionsResolver\\Options' => __DIR__ . '/..' . '/symfony/options-resolver/Options.php',
        'Symfony\\Component\\OptionsResolver\\OptionsResolver' => __DIR__ . '/..' . '/symfony/options-resolver/OptionsResolver.php',
        'WeChat\\Card' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Card.php',
        'WeChat\\Contracts\\BasicPushEvent' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/BasicPushEvent.php',
        'WeChat\\Contracts\\BasicWeChat' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/BasicWeChat.php',
        'WeChat\\Contracts\\DataArray' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/DataArray.php',
        'WeChat\\Contracts\\DataError' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/DataError.php',
        'WeChat\\Contracts\\Tools' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Contracts/Tools.php',
        'WeChat\\Custom' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Custom.php',
        'WeChat\\Exceptions\\InvalidArgumentException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidArgumentException.php',
        'WeChat\\Exceptions\\InvalidDecryptException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidDecryptException.php',
        'WeChat\\Exceptions\\InvalidResponseException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/InvalidResponseException.php',
        'WeChat\\Exceptions\\LocalCacheException' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Exceptions/LocalCacheException.php',
        'WeChat\\Limit' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Limit.php',
        'WeChat\\Media' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Media.php',
        'WeChat\\Menu' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Menu.php',
        'WeChat\\Oauth' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Oauth.php',
        'WeChat\\Pay' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Pay.php',
        'WeChat\\Product' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Product.php',
        'WeChat\\Qrcode' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Qrcode.php',
        'WeChat\\Receive' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Receive.php',
        'WeChat\\Scan' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Scan.php',
        'WeChat\\Script' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Script.php',
        'WeChat\\Shake' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Shake.php',
        'WeChat\\Tags' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Tags.php',
        'WeChat\\Template' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Template.php',
        'WeChat\\User' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/User.php',
        'WeChat\\Wifi' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeChat/Wifi.php',
        'WeMini\\Basic' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Basic.php',
        'WeMini\\Code' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Code.php',
        'WeMini\\Crypt' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Crypt.php',
        'WeMini\\Domain' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Domain.php',
        'WeMini\\Plugs' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Plugs.php',
        'WeMini\\Poi' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Poi.php',
        'WeMini\\Qrcode' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Qrcode.php',
        'WeMini\\Template' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Template.php',
        'WeMini\\Tester' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/Tester.php',
        'WeMini\\Total' => __DIR__ . '/..' . '/zoujingli/wechat-developer/WeMini/Total.php',
        'WeMini\\User' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeMini/User.php',
        'WeOpen\\Login' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen/Login.php',
        'WeOpen\\MiniApp' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen/MiniApp.php',
        'WeOpen\\Service' => __DIR__ . '/..' . '/zoujingli/weopen-developer/WeOpen/Service.php',
        'app\\admin\\controller\\Auth' => __DIR__ . '/../..' . '/application/admin/controller/Auth.php',
        'app\\admin\\controller\\Config' => __DIR__ . '/../..' . '/application/admin/controller/Config.php',
        'app\\admin\\controller\\Index' => __DIR__ . '/../..' . '/application/admin/controller/Index.php',
        'app\\admin\\controller\\Log' => __DIR__ . '/../..' . '/application/admin/controller/Log.php',
        'app\\admin\\controller\\Login' => __DIR__ . '/../..' . '/application/admin/controller/Login.php',
        'app\\admin\\controller\\Menu' => __DIR__ . '/../..' . '/application/admin/controller/Menu.php',
        'app\\admin\\controller\\Node' => __DIR__ . '/../..' . '/application/admin/controller/Node.php',
        'app\\admin\\controller\\Plugs' => __DIR__ . '/../..' . '/application/admin/controller/Plugs.php',
        'app\\admin\\controller\\User' => __DIR__ . '/../..' . '/application/admin/controller/User.php',
        'app\\index\\controller\\Index' => __DIR__ . '/../..' . '/application/index/controller/Index.php',
        'app\\store\\controller\\Express' => __DIR__ . '/../..' . '/application/store/controller/Express.php',
        'app\\store\\controller\\Goods' => __DIR__ . '/../..' . '/application/store/controller/Goods.php',
        'app\\store\\controller\\GoodsBrand' => __DIR__ . '/../..' . '/application/store/controller/GoodsBrand.php',
        'app\\store\\controller\\GoodsCate' => __DIR__ . '/../..' . '/application/store/controller/GoodsCate.php',
        'app\\store\\controller\\GoodsSpec' => __DIR__ . '/../..' . '/application/store/controller/GoodsSpec.php',
        'app\\store\\controller\\Order' => __DIR__ . '/../..' . '/application/store/controller/Order.php',
        'app\\store\\controller\\wechat\\Demo' => __DIR__ . '/../..' . '/application/store/controller/wechat/Demo.php',
        'app\\store\\controller\\wechat\\Index' => __DIR__ . '/../..' . '/application/store/controller/wechat/Index.php',
        'app\\store\\service\\GoodsService' => __DIR__ . '/../..' . '/application/store/service/GoodsService.php',
        'app\\store\\service\\MemberService' => __DIR__ . '/../..' . '/application/store/service/MemberService.php',
        'app\\store\\service\\OrderService' => __DIR__ . '/../..' . '/application/store/service/OrderService.php',
        'app\\wechat\\controller\\Config' => __DIR__ . '/../..' . '/application/wechat/controller/Config.php',
        'app\\wechat\\controller\\Fans' => __DIR__ . '/../..' . '/application/wechat/controller/Fans.php',
        'app\\wechat\\controller\\FansBlock' => __DIR__ . '/../..' . '/application/wechat/controller/FansBlock.php',
        'app\\wechat\\controller\\Keys' => __DIR__ . '/../..' . '/application/wechat/controller/Keys.php',
        'app\\wechat\\controller\\Menu' => __DIR__ . '/../..' . '/application/wechat/controller/Menu.php',
        'app\\wechat\\controller\\News' => __DIR__ . '/../..' . '/application/wechat/controller/News.php',
        'app\\wechat\\controller\\Review' => __DIR__ . '/../..' . '/application/wechat/controller/Review.php',
        'app\\wechat\\controller\\Tags' => __DIR__ . '/../..' . '/application/wechat/controller/Tags.php',
        'app\\wechat\\controller\\api\\Js' => __DIR__ . '/../..' . '/application/wechat/controller/api/Js.php',
        'app\\wechat\\controller\\api\\Push' => __DIR__ . '/../..' . '/application/wechat/controller/api/Push.php',
        'app\\wechat\\controller\\api\\Tools' => __DIR__ . '/../..' . '/application/wechat/controller/api/Tools.php',
        'app\\wechat\\service\\FansService' => __DIR__ . '/../..' . '/application/wechat/service/FansService.php',
        'app\\wechat\\service\\MediaService' => __DIR__ . '/../..' . '/application/wechat/service/MediaService.php',
        'app\\wechat\\service\\TagsService' => __DIR__ . '/../..' . '/application/wechat/service/TagsService.php',
        'think\\captcha\\Captcha' => __DIR__ . '/..' . '/topthink/think-captcha/src/Captcha.php',
        'think\\captcha\\CaptchaController' => __DIR__ . '/..' . '/topthink/think-captcha/src/CaptchaController.php',
        'think\\composer\\Plugin' => __DIR__ . '/..' . '/topthink/think-installer/src/Plugin.php',
        'think\\composer\\ThinkExtend' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkExtend.php',
        'think\\composer\\ThinkFramework' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkFramework.php',
        'think\\composer\\ThinkTesting' => __DIR__ . '/..' . '/topthink/think-installer/src/ThinkTesting.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit560f5131ba35ccbe0906be0aed9ee6bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit560f5131ba35ccbe0906be0aed9ee6bd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit560f5131ba35ccbe0906be0aed9ee6bd::$classMap;

        }, null, ClassLoader::class);
    }
}
