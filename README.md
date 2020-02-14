Laravel-Identicon Package
=========================
[![Join PHP Chat][ico-phpchat]][link-phpchat]
[![Chat on Telegram][ico-telegram]][link-telegram]
[![Laravel Package][ico-laravel]][link-repo]
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![SensioLabsInsight][ico-sensiolabs]][link-sensiolabs]
[![Total Downloads][ico-downloads]][link-downloads]

> Laravel [Identicon][link-identicon] Package - Extends Identicon Library and Adds Support for Seamless Usage with Laravel.

## Quick start


### Installation

```bash
$ composer require irazasyed/laravel-identicon
```

## Usage

This Package adds Laravel Support to [Identicon][link-identicon] PHP Library. It simply extends the library as well as optimized for usage with Laravel. So all the methods listed [here][link-identicon] are available and will work seamlessly.

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

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email `syed at lukonet.com` instead of using the issue tracker.

## Credits

- [Syed][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-identicon.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Firazasyed%2Flaravel-identicon?ref=badge_large)

[ico-phpchat]: https://img.shields.io/badge/Slack-PHP%20Chat-5c6aaa.svg?style=flat-square&logo=slack&labelColor=4A154B
[ico-telegram]: https://img.shields.io/badge/@PHPChatCo-2CA5E0.svg?style=flat-square&logo=telegram&label=Telegram
[ico-laravel]: https://img.shields.io/badge/Laravel-5|6-FF2D20.svg?style=flat-square&logo=laravel&labelColor=black&logoColor=white
[ico-version]: https://img.shields.io/packagist/v/irazasyed/laravel-identicon.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/irazasyed/laravel-identicon.svg?style=flat-square
[ico-sensiolabs]: https://img.shields.io/sensiolabs/i/3a51a89d-7e80-467d-b857-5b05ccf3bdb5.svg?style=flat-square

[link-phpchat]: https://phpchat.co/?ref=laravel-identicon
[link-telegram]: https://t.me/PHPChatCo
[link-repo]: https://github.com/irazasyed/laravel-identicon
[link-packagist]: https://packagist.org/packages/irazasyed/laravel-identicon
[link-downloads]: https://packagist.org/packages/irazasyed/laravel-identicon
[link-sensiolabs]: https://insight.sensiolabs.com/projects/3a51a89d-7e80-467d-b857-5b05ccf3bdb5
[link-author]: https://github.com/irazasyed
[link-contributors]: ../../contributors
[link-identicon]: http://identicon-php.org/
