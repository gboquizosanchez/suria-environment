# Suria environment package
Various environments (.env)

This package allows multiples .env in your Laravel application, one for each environment.

Environment is establishes in __.env__: 

```APP_ENV={NAME_OF_ENVIRONMENT}```

This variable is required only.

Your real .env fill will be in ```.env.{NAME_OF_ENVIRONMENT}```.

For instance: ```APP_ENV=local``` will take ```.env.local``` file. Or ```APP_ENV=production```, ```.env.production``` file.

If you want to use it in your project:

```composer require suria/environment```

To force discover you will need execute this command in your project:

```php artisan vendor:publish --force --tag="environment"```

You will see that this directory [\vendor\suria\environment\bootstrap] is copied to [\bootstrap] and a new file called __environment.php__
appear inside of the bootstrap directory of your application.

Now a key can be generated through ```php artisan key:generate --env={NAME_OF_ENVIRONMENT}```.

Suria environment has been tried in Laravel 5.5 with force auto-discover. If you have a previous version,
please contact with me in ```germanboquizosanchez@gmail.com```
