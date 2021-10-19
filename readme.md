# Sentry

Sentry is fully-featured authentication & authorization system. It also provides additional features such as user groups and additional security features.

Sentry is a framework agnostic set of interfaces with default implementations, though you can substitute any implementations you see fit.

### Features

It also provides additional features such as user groups and additional security features:

- Configurable authentication (can use any type of authentication required, such as username or email)
- Authorization
- Activation of user *(optional)*
- Groups and group permissions
- "Remember me"
- User suspension
- Login throttling *(optional)*
- User banning
- Password resetting
- User data
- Interface driven - switch out your own implementations at will

### Installation

Installation of Sentry is very easy. We've got a number of guides to get Sentry working with your favorite framework or on it's own:

	composer require codise/sentry
	
After installing the package, open your Laravel config file app/config/app.php and add the following lines.

	Codise\Sentry\SentryServiceProvider::class,

In the aliases array add the following facade for this package.

	'Sentry' => Codise\Sentry\Facades\Laravel\Sentry::class,
	
### Migrations

	php artisan migrate --package=codise/sentry
	
### Configuration

After installing, you can publish the package configuration file into your application by running the following command:

	php artisan config:publish codise/sentry
	
This will publish the config file to app/config/packages/cartalyst/sentry/config.php where you can modify the package configuration.