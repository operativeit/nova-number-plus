# Laravel Nova 4 Number 

This [Nova 4](https://nova.laravel.com/) field has lot of options to format number

[![Latest Version on Packagist](https://img.shields.io/packagist/v/operativeit/nova-number-plus.svg?style=flat-square)](https://packagist.org/packages/operativeit/nova-number-plus)
[![Total Downloads](https://img.shields.io/packagist/dt/operativeit/nova-number-plus.svg?style=flat-square)](https://packagist.org/packages/operativeit/nova-number-plus)
![GitHub forks](https://img.shields.io/github/forks/operativeit/nova-number-plus)
![GitHub issues](https://img.shields.io/github/issues/operativeit/nova-number-plus)
[![License](https://img.shields.io/packagist/l/operativeit/nova-number-plus)](https://github.com/operativeit/nova-number-plus/blob/master/LICENSE.md)

## Installation

`composer require eom-plus/nova-number-plus`

## Usage

In your nova resource make the field `EomPlus\NovaSignature\Signature`.
This field fits perfectly with a `TEXT` column as it store data in base64 format and can be used both for resources and actions.

```php
use EomPlus\NovaNumberPlus\NumberPlus;

// ...

public function fields()
{
    return [
        // ...
        NumberPlus::make('Amount'),
        // ...
    ];
}
```

## Configuration

- `prefix`: A word, letter, or number placed before `value`
- `suffix`: A word, letter, or number placed after `value`
- `separator`: Character used as the thousands separator
- `decimal`: Character used to separate the integer part from the fractional part of a number
- `precision`: The precision property returns the number of bits of precision that can be represented.
- `minimumFractionDigits`: The minimum number of digits after the decimal separator.
- `prefill`: Set initial value before mount the component
- `reverseFill`: Fills string from the right side of the mask
- `masked`: Value will be masked (with contain separation characters)
- `min`: The min attribute specifies the minimum value for an input element.
- `nax`: The max attribute specifies the maximum value for an input element.
- `nullValue`: Value of input element is set to a default when no value present

## ⭐️ Show Your Support

Please give a ⭐️ if this project helped you!

### Other Packages You Might Like

- [Nova Rating Field](https://github.com/operativeit/nova-rating-field) - A Star rating Nova 4 field to use in your Laravel Nova apps.
- [Nova Feedback Field](https://github.com/operativeit/nova-feedback-field) - An Emoji feedback Nova 4 field to use in your Laravel Nova apps.
- [Nova Input Group](https://github.com/operativeit/nova-input-group) - A Laravel Nova 4 text field formatted as input group
- [Nova Signature](https://github.com/operativeit/nova-signature) - A Laravel Nova 4 signature pad
 
Take a look to our Github repositories as we have a lot of forked nova components with fixes that are still not merge into main owner branch.

## License

The MIT License (MIT). Please see [License File](https://github.com/operativeit/nova-number-plus/blob/master/LICENSE.md) for more information.
