# DEVELOP

Up and running with small Docker dev environments.

## Documentation

Full documentation can be found at [https://vessel.shippingdocker.com](https://vessel.shippingdocker.com).

## Install

Vessel is just a small set of files that sets up a local Docker-based dev environment per project. There is nothing to install globally, except Docker itself!

This is all there is to using it:

```bash
composer require dr3ads/copyandpaste
php artisan vendor:publish --provider="CopyAndPaste\\CopyAndPasteServiceProvider"

# Run this once to initialize project
# Must run with "bash" until initialized
bash develop init

./develop start
```