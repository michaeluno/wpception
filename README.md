# WPCeption
WPCeption is a custom build of Codeception for testing WordPress plugin and themes.

## Background
The current version of [WordPress Unit Tests Library](http://develop.svn.wordpress.org/tags/5.3.2/tests/phpunit/includes/) for WordPress 5.3.2 (the latest as of 2020/01/18) is constrained to PHPUnit 7.x. while Codeception 4.0.2 uses PHP Unit 8.x.

This creates a difficult situation for WordPress plugin/theme developers to use Codeception for their test tool. 

So this custom build solves the incompatibility issue.

## Usage
The same as Codeception. 

## Included Versions
- [Codeception](https://github.com/codeception/codeception) 4.0.2
- [PHPUnit](https://github.com/sebastianbergmann/phpunit) 7.5.20

## Create Your Own Build
1. Clone this repository to local.
2. Run Composer to download Codeception, PHPUnit v7.x, and their dependencies.
```bash
$ composer install
```
3. Download the phar archiver [box.phar](https://github.com/humbug/box/releases/download/3.8.4/box.phar).
4. From the repository root directory, run
```bash
$ php box.phar compile
```
5. `build/wpcept.phar` will be created. Change the configurations with `box.json` as you need.

## License
Licensed under [MIT](LICENSE.txt).