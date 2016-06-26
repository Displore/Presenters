# Displore Presenters

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Quality Score][ico-code-quality]][link-code-quality]

Basic presenters, designed but not dependend on Laravel.

## Install

### Via [Displore Core][link-displore-core]

``` bash
$ php artisan displore:install presenters
```

### Via Composer

``` bash
$ composer require displore/presenters
```

## Usage

1. Let your presentable model use the `Displore\Presenters\Presentable` trait.
2. Set a `$presenter` variable in your model, containing a path to the presenter class for that model.
3. The presenter should extend `Displore\Presenters\Presenter`.
4. Now you can use the `present()` function on your model.

## Change log

Please see [changelog](changelog.md) for more information what has changed recently.

## Testing

The package comes with unit tests.
In a Laravel application, with [Laravel Packager](https://github.com/Jeroen-G/laravel-packager):
``` bash
$ php artisan packager:git *Displore Github url*
$ php artisan packager:tests Displore Presenters
$ phpunit
```

## Contributing

Please see [contributing](contributing.md) for details.

## Credits

- [JeroenG][link-author]
- [All Contributors][link-contributors]

## License

The EUPL License. Please see the [License File](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/displore/presenters.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/displore/presenters.svg?style=flat-square

[link-displore-core]: https://github.com/displore/core

[link-packagist]: https://packagist.org/packages/displore/presenters
[link-code-quality]: https://scrutinizer-ci.com/g/displore/presenters
[link-author]: https://github.com/Jeroen-G
[link-contributors]: ../../contributors
