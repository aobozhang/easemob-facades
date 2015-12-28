# easemob-facades for laravel
used Easemob as Normal laravel facades

## Installation  

```
composer require aobozhang/EasemobFacades
```

```
php artisan vendor:publish
```

## Usage  

```php
use Easemob;

...

$options = [
    'username' => 'test_username',
    'password' => 'test_password'
];

return Easemob::accreditRegister($options);

```  

## Configuration  

Modify "config\app.php"  

```php
<?php

    return = [

        ...,

        'providers' = [

            ...,

            Aobo\Easemob\EasemobServiceProvider::class,

        ],
    ];

```  

> <strong>Till now, you can use it In Test Account Supply by [http://github/easemob/](http://github/easemob/)
</strong>

## To Use Your Own Configuration  

Modify ".env" -- recommend

```
EASEMOB_ORG_NAME=YourOrgName
EASEMOB_APP_NAME=YourAppName
EASEMOB_CLIENT_ID=YourClientID
EASEMOB_CLIENT_SECRET=YourClientSecret
```

Or You Can Modify "config\easemob.php" -- The Same effect.

```
return [
    'org_name'      => env('EASEMOB_ORG_NAME', 'easemob-playground'),
    'app_name'      => env('EASEMOB_APP_NAME', 'test1'),
    'client_id'     => env('EASEMOB_CLIENT_ID', 'YXA6wDs-MARqEeSO0VcBzaqg5A'),
    'client_secret' => env('EASEMOB_CLIENT_SECRET', 'YXA6JOMWlLap_YbI_ucz77j-4-mI0JA'),
];
```  
