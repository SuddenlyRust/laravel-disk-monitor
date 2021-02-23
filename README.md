# Monitor metrics of Laravel disks

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/codebar/laravel-disk-monitor)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/codebar/laravel-disk-monitor/run-tests?label=tests)](https://github.com/codebar/laravel-disk-monitor/actions?query=workflow%3ATests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/codebar/laravel-disk-monitor/Check%20&%20fix%20styling?label=code%20style)](https://github.com/codebar/laravel-disk-monitor/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar/laravel-disk-monitor.svg?style=flat-square)](https://packagist.org/packages/codebar/laravel-disk-monitor)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-laravel-disk-monitor-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-laravel-disk-monitor-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require codebar/laravel-disk-monitor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Codebar\DiskMonitor\DiskMonitorServiceProvider" --tag="laravel-disk-monitor-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Codebar\DiskMonitor\DiskMonitorServiceProvider" --tag="laravel-disk-monitor-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-disk-monitor = new Codebar\DiskMonitor();
echo $laravel-disk-monitor->echoPhrase('Hello, Codebar!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Ruslan Steiger](https://github.com/SuddenlyRust)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
