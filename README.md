Laravel-Identicon Package
=========================
[![Package for Laravel](https://img.shields.io/badge/Package%20for%20Laravel-5|6-blue.svg?style=flat-square)](https://github.com/irazasyed/laravel-identicon)
[![Latest Version](https://img.shields.io/github/release/irazasyed/laravel-identicon.svg?style=flat-square)](https://github.com/irazasyed/laravel-identicon/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/3a51a89d-7e80-467d-b857-5b05ccf3bdb5.svg?style=flat-square)](https://insight.sensiolabs.com/projects/3a51a89d-7e80-467d-b857-5b05ccf3bdb5)
[![Total Downloads](https://img.shields.io/packagist/dt/irazasyed/laravel-identicon.svg?style=flat-square)](https://packagist.org/packages/irazasyed/laravel-identicon)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-identicon.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-identicon?ref=badge_shield)


> Laravel 5|6 [Identicon][1] Package - Extends Identicon Library and Adds Support for Seamless Usage with Laravel 5|6.

## Quick start


### Installation

```bash
$ composer require irazasyed/laravel-identicon
```

## Usage

This Package adds Laravel Support to [Identicon][1] PHP Library. It simply extends the library as well as optimized for usage with Laravel. So all the methods listed [here][1] are available and will work seamlessly.

### Example Methods

Generate and Display an identicon image:

```php
Identicon::displayImage('foo');
```

Generate and get the image data

```php
$imageData = Identicon::getImageData('bar');
```

Generate and get the base 64 image uri ready for integrate into an HTML img tag. The below example is using blade templating

```
<img src="{{ Identicon::getImageDataUri('bar') }}" alt="bar Identicon" />
```

...

And all the other remaining methods from the main library.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-identicon.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-identicon?ref=badge_large)

## Additional information


Any issues, please [report here](https://github.com/irazasyed/laravel-identicon/issues)


[1]: http://identicon-php.org/
