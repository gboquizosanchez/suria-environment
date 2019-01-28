# suria-environment
Laravel Various Environments (.env)

This package has been developed in order to grant various .env in your Laravel application, one for each environment.

__.env__ file only is used for establishes name of the environment. Use it is really simple, only need to put
```APP_ENV={NAME_OF_ENVIRONMENT}``` inside and you will need make a __.{NAME_OF_ENVIRONMENT}.env.__ file with all information needed that 
normally you would put in .env.

For instance: ```APP_ENV=local``` will take ```.local.env``` file. Or ```APP_ENV=production```, ```.production.env``` file.

If you want to use it in your project:

```composer require suria/environment```

To use force auto-discover as such you will execute this command in your project:

```php artisan vendor:publish --force --tag="environment"```

Other alternative method is:

```php artisan vendor:publish --force``` 

Once launched you will need select the tag name __environment__ or Provider called __Suria\Environment\EnvironmentServiceProvider__.

You will see that this directory [\vendor\suria\environment\bootstrap] is copied to [\bootstrap] and a new file called __environment.php__
appear inside of the bootstrap directory of your application.

Suria environment has been tried in Laravel 5.5 with force auto-discover. If you have a previous version,
please contact with me in ```germanboquizosanchez@gmail.com```
