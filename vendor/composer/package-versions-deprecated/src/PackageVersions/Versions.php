<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.2.0@50f57105bad3d97a43ec4a485eb57daf347eafea',
  'aws/aws-crt-php' => 'v1.2.4@eb0c6e4e142224a10b08f49ebf87f32611d162b2',
  'aws/aws-sdk-php' => '3.294.1@63c720229a9c9cdedff6bac98d6e72be8cc241f1',
  'barryvdh/laravel-dompdf' => 'v2.0.1@9843d2be423670fb434f4c978b3c0f4dd92c87a6',
  'box/spout' => 'v3.3.0@9bdb027d312b732515b884a341c0ad70372c6295',
  'brian2694/laravel-toastr' => '5.58@6c7d1c6a959b7042757865d3df0c2f57b912f2c1',
  'brick/math' => '0.11.0@0ad82ce168c82ba30d1c01ec86116ab52f589478',
  'carbonphp/carbon-doctrine-types' => '2.1.0@99f76ffa36cce3b70a4a6abce41dba15ca2e84cb',
  'ckeditor/ckeditor' => '4.22.1@0d51138b0a258165ac09724e8f5cda67cf9126a3',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'composer/semver' => '3.4.0@35e8d0af4486141bc745f23a29cc2091eb624a32',
  'defuse/php-encryption' => 'v2.4.0@f53396c2d34225064647a05ca76c1da9d99e5828',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'doctrine/annotations' => '1.14.3@fb0d71a7393298a7b232cbf4c8b1f73f3ec3d5af',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '3.7.2@0ac3c270590e54910715e9a1a044cc368df282b2',
  'doctrine/deprecations' => '1.1.2@4f2d4f2836e7ec4e7a8625e75c6aa916004db931',
  'doctrine/event-manager' => '2.0.0@750671534e0241a7c50ea5b43f67e23eb5c96f32',
  'doctrine/inflector' => '2.0.8@f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/persistence' => '3.2.0@63fee8c33bef740db6730eb2a750cd3da6495603',
  'dompdf/dompdf' => 'v2.0.4@093f2d9739cec57428e39ddadedfd4f3ae862c0f',
  'dragonmantank/cron-expression' => 'v3.3.3@adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.17.0@bbc513d79acf6691fa9cf10f192c90dd2957f18c',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'firebase/php-jwt' => 'v6.10.0@a49db6f0a5033aef5143295342f1c95521b075ff',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'graham-campbell/result-type' => 'v1.1.2@fbd48bce38f73f8a4ec8583362e732e4095e5862',
  'gregwar/captcha' => 'v1.2.1@229d3cdfe33d6f1349e0aec94a26e9205a6db08e',
  'guzzlehttp/guzzle' => '7.8.1@41042bc7ab002487b876a0683fc8dce04ddce104',
  'guzzlehttp/promises' => '2.0.2@bbff78d96034045e58e13dedd6ad91b5d1253223',
  'guzzlehttp/psr7' => '1.9.1@e4490cabc77465aaee90b20cfc9a770f8c04be6b',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'iyzico/iyzipay-php' => 'v2.0.54@4a5874a63582e92338662782887da757de62c646',
  'kingflamez/laravelrave' => 'v4.2.1@4443497c306e0b912feb77156d8947c1456e05b4',
  'laminas/laminas-diactoros' => '2.26.0@6584d44eb8e477e89d453313b858daac6183cddc',
  'laravel/framework' => 'v8.83.27@e1afe088b4ca613fb96dc57e6d8dbcb8cc2c6b49',
  'laravel/passport' => 'v10.4.2@4bfdb9610575a0c84a6810701f4fd45fb8ab3888',
  'laravel/sanctum' => 'v2.15.1@31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
  'laravel/serializable-closure' => 'v1.3.3@3dbf8a8e914634c48d389c1234552666b3d43754',
  'laravel/socialite' => 'v5.11.0@4f6a8af6f3f7c18da03d19842dd0514315501c10',
  'laravel/tinker' => 'v2.8.2@b936d415b252b499e8c3b1f795cd4fc20f57e1f3',
  'laravelpkg/laravelchk' => 'dev-master@4d88f6e0c5b4b5c6c3cfb305b1320288efb84708',
  'lcobucci/clock' => '3.2.0@6f28b826ea01306b07980cb8320ab30b966cd715',
  'lcobucci/jwt' => '4.3.0@4d7de2fe0d51a96418c0d04004986e410e87f6b4',
  'league/commonmark' => '2.4.1@3669d6d5f7a47a93c08ddff335e6d945481a1dd5',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/flysystem-aws-s3-v3' => '1.0.30@af286f291ebab6877bac0c359c6c2cb017eb061d',
  'league/glide' => '1.7.2@8dba756ada0b8e525bf6f1f7d1bd83c1e99e124e',
  'league/mime-type-detection' => '1.14.0@b6a5854368533df0295c5761a0253656a2e52d9e',
  'league/oauth1-client' => 'v1.10.1@d6365b901b5c287dd41f143033315e2f777e1167',
  'league/oauth2-server' => '8.5.4@ab7714d073844497fd222d5d0a217629089936bc',
  'league/uri' => '7.4.0@bf414ba956d902f5d98bf9385fcf63954f09dce5',
  'league/uri-interfaces' => '7.4.0@bd8c487ec236930f7bbc42b8d374fa882fbba0f3',
  'maatwebsite/excel' => '3.1.51@6d3c78ce6645abada32e03b40dc7f3c561878bc3',
  'madnest/madzipper' => 'v1.2.1@40d42f13ecbcb3a9bd8847864cdd2ad3afa4bb5e',
  'maennchen/zipstream-php' => '3.1.0@b8174494eda667f7d13876b4a7bfef0f62a7c0d1',
  'markbaker/complex' => '3.0.2@95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
  'markbaker/matrix' => '3.0.1@728434227fe21be27ff6d86621a1b13107a2562c',
  'masterminds/html5' => '2.8.1@f47dcf3c70c584de14f21143c55d9939631bc6cf',
  'mercadopago/dx-php' => '2.6.1@cfaf5893def0bcd95ecb863f1822bc225c398a04',
  'milon/barcode' => '8.0.1@a1b1ee1a743c1368597f1742e6ee4765333a15a1',
  'monolog/monolog' => '2.9.2@437cb3628f4cf6042cc10ae97fc2b8472e48ca1f',
  'mpdf/mpdf' => 'v8.2.2@596a87b876d7793be7be060a8ac13424de120dd5',
  'mpdf/psr-http-message-shim' => '1.0.0@3206e6b80b6d2479e148ee497e9f2bebadc919db',
  'mpdf/psr-log-aware-trait' => 'v2.0.0@7a077416e8f39eb626dee4246e0af99dd9ace275',
  'mtdowling/jmespath.php' => '2.7.0@bbb69a935c2cbb0c03d7f481a238027430f6440b',
  'myclabs/deep-copy' => '1.11.1@7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
  'nesbot/carbon' => '2.72.1@2b3b3db0a2d0556a177392ff1a3bf5608fa09f78',
  'nette/schema' => 'v1.2.5@0462f0166e823aad657c9224d0f849ecac1ba10a',
  'nette/utils' => 'v4.0.3@a9d127dd6a203ce6d255b2e2db49759f7506e015',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nicmart/tree' => '0.3.1@c55ba47c64a3cb7454c22e6d630729fc2aab23ff',
  'nikic/php-parser' => 'v4.18.0@1bcbb2179f97633e98bbbc87044ee2611c7d7999',
  'nwidart/laravel-modules' => 'v8.3.0@ee06dc0ac019cc392bd66a1c3e6cec0412fcc52d',
  'nyholm/psr7' => '1.8.1@aa5fc277a4f5508013d571341ade0c3886d4d00e',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.5.1@8a8a1ebcf6aea861ef30197999f096f7bd4b4456',
  'phpoffice/phpspreadsheet' => '1.29.0@fde2ccf55eaef7e86021ff1acce26479160a0fa0',
  'phpoption/phpoption' => '1.9.2@80735db690fe4fc5c76dfa7f9b770634285fa820',
  'phpseclib/phpseclib' => '3.0.34@56c79f16a6ae17e42089c06a2144467acc35348a',
  'psr/cache' => '3.0.0@aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
  'psr/clock' => '1.0.0@e41a24703d4560fd0acb709162f73b8adfc3aa0d',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.3@bb5906edc1c324c9a05aa0873d40117941e5fa90',
  'psr/http-factory' => '1.0.2@e616d01114759c4c489f93b099585439f795fe35',
  'psr/http-message' => '1.1@cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.22@128fa1b608be651999ed9789c95e6e2a31b5802b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '2.0.0@a4b48764bfbb8f3a6a4d1aeb1a35bb5e9ecac4a5',
  'ramsey/uuid' => '4.7.5@5f0df49ae5ad6efb7afa69e6bfab4e5b1e080d8e',
  'rap2hpoutre/fast-excel' => 'v3.2.0@28183f3a90179386bfadcd0083129c247ce49fbe',
  'razorpay/razorpay' => '2.8.7@2180c8c3c39678623f5cb8f639c39a706de14c44',
  'rmccue/requests' => 'v2.0.9@422612952ff3bd5163039f8889eaaaab95a432eb',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'seshac/laravel-shiprocket-api' => '2.0.0@db0317479dae00d6561143cb4184832e8bc1ce5e',
  'setasign/fpdi' => 'v2.6.0@a6db878129ec6c7e141316ee71872923e7f1b7ad',
  'spatie/browsershot' => '3.60.1@8779b2cd10dcd9dab4abd0127429e5578da3f9ab',
  'spatie/crawler' => '6.0.2@276ecb429a770474695a1278a9ad3e719fbef259',
  'spatie/image' => '1.10.6@897e819848096ea8eee8ed4a3531c6166f9a99e0',
  'spatie/image-optimizer' => '1.7.2@62f7463483d1bd975f6f06025d89d42a29608fe1',
  'spatie/laravel-sitemap' => '5.9.2@df5c3db511e08a8e64a3d7e28613ab018a99e95d',
  'spatie/robots-txt' => '2.0.3@dacba2ba159364987392aa1b0002e196c5923970',
  'spatie/temporary-directory' => '2.2.0@efc258c9f4da28f0c7661765b8393e4ccee3d19c',
  'stripe/stripe-php' => 'v10.21.0@b4ab319731958077227fad1874a3671458c5d593',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.32@c70df1ffaf23a8d340bded3cfab1b86752ad6ed7',
  'symfony/css-selector' => 'v7.0.0@bb51d46e53ef8d50d523f0c5faedba056a27943e',
  'symfony/deprecation-contracts' => 'v3.4.0@7c3aff79d10325257a001fcf92d991f24fc967cf',
  'symfony/dom-crawler' => 'v5.4.32@728f1fc136252a626ba5a69c02bd66a3697ff201',
  'symfony/error-handler' => 'v5.4.29@328c6fcfd2f90b64c16efaf0ea67a311d672f078',
  'symfony/event-dispatcher' => 'v6.4.0@d76d2632cfc2206eecb5ad2b26cd5934082941b6',
  'symfony/event-dispatcher-contracts' => 'v3.4.0@a76aed96a42d2b521153fb382d418e30d18b59df',
  'symfony/finder' => 'v5.4.27@ff4bce3c33451e7ec778070e45bd23f74214cd5d',
  'symfony/http-foundation' => 'v5.4.32@cbcd80a4c36f59772d62860fdb0cb6a38da63fd2',
  'symfony/http-kernel' => 'v5.4.33@892636f9279f953dc266dc088f900b03eecb4ffa',
  'symfony/mime' => 'v5.4.26@2ea06dfeee20000a319d8407cea1d47533d5a9d2',
  'symfony/polyfill-ctype' => 'v1.28.0@ea208ce43cbb04af6867b4fdddb1bdbf84cc28cb',
  'symfony/polyfill-iconv' => 'v1.28.0@6de50471469b8c9afc38164452ab2b6170ee71c1',
  'symfony/polyfill-intl-grapheme' => 'v1.28.0@875e90aeea2777b6f135677f618529449334a612',
  'symfony/polyfill-intl-idn' => 'v1.28.0@ecaafce9f77234a6a449d29e49267ba10499116d',
  'symfony/polyfill-intl-normalizer' => 'v1.28.0@8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
  'symfony/polyfill-mbstring' => 'v1.28.0@42292d99c55abe617799667f454222c54c60e229',
  'symfony/polyfill-php72' => 'v1.28.0@70f4aebd92afca2f865444d30a4d2151c13c3179',
  'symfony/polyfill-php73' => 'v1.28.0@fe2f306d1d9d346a7fee353d0d5012e401e984b5',
  'symfony/polyfill-php80' => 'v1.28.0@6caa57379c4aec19c0a12a38b59b26487dcfe4b5',
  'symfony/process' => 'v5.4.28@45261e1fccad1b5447a8d7a8e67aa7b4a9798b7b',
  'symfony/psr-http-message-bridge' => 'v2.3.1@581ca6067eb62640de5ff08ee1ba6850a0ee472e',
  'symfony/routing' => 'v5.4.33@5b5b86670f947db92ab54cdcff585e76064d0b04',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v6.4.0@b45fcf399ea9c3af543a92edf7172ba21174d809',
  'symfony/translation' => 'v5.4.31@ba72f72fceddf36f00bd495966b5873f2d17ad8f',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v5.4.29@6172e4ae3534d25ee9e07eb487c20be7760fcc65',
  'tijsverkoyen/css-to-inline-styles' => 'v2.2.7@83ee6f38df0a63106a9e4536e3060458b74ccedb',
  'twilio/sdk' => '6.44.4@08aad5f377e2245b9cd7508e7762d95e7392fa4d',
  'unicodeveloper/laravel-paystack' => '1.1.0@4c50abd6902463c7688a51efaef3c2a2147f6860',
  'vlucas/phpdotenv' => 'v5.6.0@2cf9fb6054c2bb1d59d1f3817706ecdb9d2934c4',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.2@e9f63cd468b7e0edd73d0c90d0406d6b961f9eb7',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'xendit/xendit-php' => '2.19.0@02e9e413a072e68d238adb1750d9e125268b16e5',
  'amirami/localizator' => 'v0.7.1-alpha@f61264953cb59fbec4a9d8fb3feaec27ce9c47aa',
  'barryvdh/laravel-debugbar' => 'v3.7.0@3372ed65e6d2039d663ed19aa699956f9d346271',
  'doctrine/instantiator' => '2.0.0@c6222283fa3f4ac679f8b9ced9a4e23f163e80d0',
  'facade/flare-client-php' => '1.10.0@213fa2c69e120bca4c51ba3e82ed1834ef3f41b8',
  'facade/ignition' => '2.17.7@b4f5955825bb4b74cba0f94001761c46335c33e9',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.23.0@e3daa170d00fde61ea7719ef47bb09bb8f1d9b01',
  'filp/whoops' => '2.15.4@a139776fa3f5985a50b509f2a02ff0f709d2a546',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laravel/sail' => 'v1.25.0@e81a7bd7ac1a745ccb25572830fecf74a89bb48a',
  'maximebf/debugbar' => 'v1.19.1@03dd40a1826f4d585ef93ef83afa2a9874a00523',
  'mockery/mockery' => '1.6.7@0cc058854b3195ba21dc6b1f7b1f60f4ef3a9c06',
  'nunomaduro/collision' => 'v5.11.0@8b610eef8582ccdc05d8f2ab23305e2d37049461',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.29@6a3a87ac2bbe33b25042753df8195ba4aa534c76',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.6.15@05017b80304e0eb3f31d90194a563fd53a6021f1',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.5@74be17022044ebaaecfdf0c5cd504fc9cd5a7131',
  'sebastian/environment' => '5.1.5@830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.6@bde739e7565280bda77be70044ac1047bc007e34',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.5@e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.1@75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/yaml' => 'v6.4.0@4f9237a1bb42455d609e6687d2613dde5b41a587',
  'theseer/tokenizer' => '1.2.2@b2ad5003ca10d4ee50a12da31de12a5774ba6b96',
  'laravel/laravel' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
