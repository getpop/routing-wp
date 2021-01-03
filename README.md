# Routing for WordPress

[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Software License][ico-license]](LICENSE.md)

<!--
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Total Downloads][ico-downloads]][link-downloads]
-->

Implementation for WordPress of contracts from package "Routing"

## Install

Via Composer

``` bash
composer require getpop/routing-wp
```

## Development

The source code is hosted on the [PoP monorepo](https://github.com/leoloso/PoP), under [`Engine/packages/routing-wp`](https://github.com/leoloso/PoP/tree/master/layers/Engine/packages/routing-wp).

## Usage

Initialize the component:

``` php
\PoP\Root\ComponentLoader::initializeComponents([
    \PoP\RoutingWP\Component::class,
]);
```

## PHP versions

Requirements:

- PHP 7.4+ for development
- PHP 7.1+ for production

### Supported PHP features

Same as the [Supported PHP features for `getpop/root`](https://github.com/getpop/root/#supported-php-features)

### Downgrading code to PHP 7.1

Via [Rector](https://github.com/rectorphp/rector) (dry-run mode):

```bash
composer preview-code-downgrade
```

## Standards

[PSR-1](https://www.php-fig.org/psr/psr-1), [PSR-4](https://www.php-fig.org/psr/psr-4) and [PSR-12](https://www.php-fig.org/psr/psr-12).

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email leo@getpop.org instead of using the issue tracker.

## Credits

- [Leonardo Losoviz][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/getpop/routing-wp.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/getpop/routing-wp/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/getpop/routing-wp.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/getpop/routing-wp.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/getpop/routing-wp.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/getpop/routing-wp
[link-travis]: https://travis-ci.org/getpop/routing-wp
[link-scrutinizer]: https://scrutinizer-ci.com/g/getpop/routing-wp/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/getpop/routing-wp
[link-downloads]: https://packagist.org/packages/getpop/routing-wp
[link-author]: https://github.com/leoloso
[link-contributors]: ../../../../../../contributors
