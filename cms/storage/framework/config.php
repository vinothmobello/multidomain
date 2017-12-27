<?php return array (
  '*::app' => 
  array (
    'debug' => true,
    'url' => 'http://54.251.189.38/cms/octobercms/',
    'timezone' => 'UTC',
    'locale' => 'en',
    'fallback_locale' => 'en',
    'key' => 'c4rNVGJhzAt7Br4Z9ZMxw9RVy7SoOi1r',
    'cipher' => 'AES-256-CBC',
    'log' => 'single',
    'providers' => 
    array (
      0 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      1 => 'Illuminate\\Bus\\BusServiceProvider',
      2 => 'Illuminate\\Cache\\CacheServiceProvider',
      3 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      4 => 'Illuminate\\Cookie\\CookieServiceProvider',
      5 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      6 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      7 => 'Illuminate\\Hashing\\HashServiceProvider',
      8 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      9 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      10 => 'Illuminate\\Queue\\QueueServiceProvider',
      11 => 'Illuminate\\Redis\\RedisServiceProvider',
      12 => 'Illuminate\\Session\\SessionServiceProvider',
      13 => 'Illuminate\\Validation\\ValidationServiceProvider',
      14 => 'Illuminate\\View\\ViewServiceProvider',
      15 => 'Laravel\\Tinker\\TinkerServiceProvider',
      16 => 'October\\Rain\\Database\\DatabaseServiceProvider',
      17 => 'October\\Rain\\Halcyon\\HalcyonServiceProvider',
      18 => 'October\\Rain\\Filesystem\\FilesystemServiceProvider',
      19 => 'October\\Rain\\Parse\\ParseServiceProvider',
      20 => 'October\\Rain\\Html\\HtmlServiceProvider',
      21 => 'October\\Rain\\Html\\UrlServiceProvider',
      22 => 'October\\Rain\\Network\\NetworkServiceProvider',
      23 => 'October\\Rain\\Scaffold\\ScaffoldServiceProvider',
      24 => 'October\\Rain\\Flash\\FlashServiceProvider',
      25 => 'October\\Rain\\Mail\\MailServiceProvider',
      26 => 'October\\Rain\\Argon\\ArgonServiceProvider',
      27 => 'System\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Db' => 'Illuminate\\Support\\Facades\\DB',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Input' => 'Illuminate\\Support\\Facades\\Input',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Redis' => 'Illuminate\\Support\\Facades\\Redis',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Url' => 'Illuminate\\Support\\Facades\\URL',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
      'Model' => 'October\\Rain\\Database\\Model',
      'Block' => 'October\\Rain\\Support\\Facades\\Block',
      'File' => 'October\\Rain\\Support\\Facades\\File',
      'Config' => 'October\\Rain\\Support\\Facades\\Config',
      'Seeder' => 'October\\Rain\\Database\\Updates\\Seeder',
      'Flash' => 'October\\Rain\\Support\\Facades\\Flash',
      'Form' => 'October\\Rain\\Support\\Facades\\Form',
      'Html' => 'October\\Rain\\Support\\Facades\\Html',
      'Http' => 'October\\Rain\\Support\\Facades\\Http',
      'Str' => 'October\\Rain\\Support\\Facades\\Str',
      'Markdown' => 'October\\Rain\\Support\\Facades\\Markdown',
      'Yaml' => 'October\\Rain\\Support\\Facades\\Yaml',
      'Ini' => 'October\\Rain\\Support\\Facades\\Ini',
      'Twig' => 'October\\Rain\\Support\\Facades\\Twig',
      'DbDongle' => 'October\\Rain\\Support\\Facades\\DbDongle',
      'Schema' => 'October\\Rain\\Support\\Facades\\Schema',
      'Cms' => 'Cms\\Facades\\Cms',
      'Backend' => 'Backend\\Facades\\Backend',
      'BackendMenu' => 'Backend\\Facades\\BackendMenu',
      'BackendAuth' => 'Backend\\Facades\\BackendAuth',
      'AjaxException' => 'October\\Rain\\Exception\\AjaxException',
      'SystemException' => 'October\\Rain\\Exception\\SystemException',
      'ApplicationException' => 'October\\Rain\\Exception\\ApplicationException',
      'ValidationException' => 'October\\Rain\\Exception\\ValidationException',
    ),
  ),
  '*::cms' => 
  array (
    'activeTheme' => 'jumplink-viola',
    'edgeUpdates' => false,
    'backendUri' => '/admin',
    'backendForceSecure' => NULL,
    'backendTimezone' => 'UTC',
    'backendSkin' => 'Backend\\Skins\\Standard',
    'loadModules' => 
    array (
      0 => 'System',
      1 => 'Backend',
      2 => 'Cms',
    ),
    'disableCoreUpdates' => false,
    'disablePlugins' => 
    array (
    ),
    'enableRoutesCache' => false,
    'urlCacheTtl' => 10,
    'parsedPageCacheTTL' => 10,
    'enableAssetCache' => false,
    'enableAssetMinify' => NULL,
    'enableAssetDeepHashing' => NULL,
    'pluginsPath' => '/plugins',
    'themesPath' => '/themes',
    'storage' => 
    array (
      'uploads' => 
      array (
        'disk' => 'local',
        'folder' => 'uploads',
        'path' => '/storage/app/uploads',
      ),
      'media' => 
      array (
        'disk' => 'local',
        'folder' => 'media',
        'path' => '/storage/app/media',
      ),
    ),
    'convertLineEndings' => false,
    'linkPolicy' => 'detect',
    'defaultMask' => 
    array (
      'file' => '777',
      'folder' => '777',
    ),
    'enableSafeMode' => NULL,
    'enableCsrfProtection' => false,
    'forceBytecodeInvalidation' => true,
  ),
  '*::view' => 
  array (
    'paths' => 
    array (
      0 => false,
    ),
    'compiled' => 'C:\\xampp\\htdocs\\october\\storage\\framework\\views',
  ),
  '*::cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => 'C:\\xampp\\htdocs\\october\\storage\\framework/cache',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
    ),
    'prefix' => 'october',
  ),
);
