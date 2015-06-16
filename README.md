# bitcoin-address

Introduces a simple class Danwe\Bitcoin\Address for immutable value objects representing bitcoin
addresses.

[![Latest Stable Version](https://poser.pugx.org/danwe/bitcoin-address/version.png)](https://packagist.org/packages/danwe/bitcoin-address)
[![Build Status](https://travis-ci.org/DanweDE/php-bitcoin-address.svg?branch=master)](https://travis-ci.org/DanweDE/php-bitcoin-address)
[![Coverage Status](https://coveralls.io/repos/DanweDE/php-bitcoin-address/badge.svg?branch=master)](https://coveralls.io/r/DanweDE/php-bitcoin-address?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/5551e50406c3183941000074/badge.svg?style=flat)](https://www.versioneye.com/user/projects/5551e50406c3183941000074)
[![Download count](https://poser.pugx.org/danwe/bitcoin-address/d/total.png)](https://packagist.org/packages/danwe/bitcoin-address)

## Requirements

* PHP 5.4 or later

## Installation

[Composer](http://getcomposer.org/) can be used to download and install
this package as well as its dependencies.

To add this package as a local, per-project dependency to your project, simply add a
dependency on `danwe/bitcoin-address` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
bitcoin-address 1.0.x:

    {
        "require": {
            "danwe/bitcoin-address": "~1.0.0"
        }
    }

## Usage

### Library Structure

All classes are located in the ParserHooks namespace, which is PSR-4 mapped onto the `src/` directory.

## Tests

This library comes with a set up PHPUnit test suite. After installation via composer, tests can be
run by running `php <project-dir>/vendor/bin/phpunit`.

## Authors

bitcoin-address has been written by [Daniel A. R. Werner](https://www.mediawiki.org/wiki/User:Danwe).

## Release notes

### 1.0.0 alpha

* Upcoming, initial release.

### TODOs:

* Support for testnet addresses, either in this or in a separate package.

## Links

* [bitcoin-address on Packagist](https://packagist.org/packages/danwe/bitcoin-address)
