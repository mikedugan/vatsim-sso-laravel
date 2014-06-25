VATSIM SSO (for Laravel)
=======================

This is the VATSIM SSO package, built specifically for Laravel applications.

If you are looking for a platform agnostic version, please check https://github.com/mikedugan/sso

##Requirements
* PHP >= 5.4.0
* Illuminate/Support (packaged with Laravel)
* Additional yet unidentified Laravel dependencies. This package was bundled and tested on Laravel 4.2

##Installation
```php
composer require mikedugan/sso-laravel dev-master
php artisan config:publish mikedugan/sso-laravel
```
Add 'Mikedugan\Sso\SsoServiceProvider' to your app.php service providers array
If you would like to use the facade, add the following line to your aliases array:
'Sso' => 'Mikedugan\Sso\SsoFacade'

Be sure to modify the contents of app/config/packages/mikedugan/sso-laravel/sso.php to match your credentials.
