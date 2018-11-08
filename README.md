# DEVELOP

Up and running with small Docker dev environments.

## Install


This is all there is to using it:

```bash
composer require dr3ads/copyandpaste
php artisan vendor:publish --provider="CopyAndPaste\\CopyAndPasteServiceProvider"

# Run this once to initialize project
# Must run with "bash" until initialized
bash develop init

./develop start
```