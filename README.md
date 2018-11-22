# Contao Dummy Bundle X


## About
xxx

## Requirements
 * PHP version >= 5.6.0
 * DOM extension
 * GD extension
 * MBString extension
 * php-font-lib
 * php-svg-lib

## Recommendations
 * OPcache (OPcache, XCache, APC, etc.): improves performance
 * IMagick or GMagick extension: improves image processing performance

## More information on Dompdf
* [Fonts and Character Encoding](https://github.com/dompdf/dompdf/wiki/About-Fonts-and-Character-Encoding)
* [CSS Compatibility](https://github.com/dompdf/dompdf/wiki/CSSCompatibility)

## Installation
Install [composer](https://getcomposer.org) if you haven't already, then enter this command in the main directory of your Contao installation:
```sh
composer require w3scout/contao-dompdf-bundle
```

## Usage
* Login to the backend and enable Dompdf at the system settings.
* Go to the themes section of the backend and create a stylesheet (@media print) to style the PDF output
