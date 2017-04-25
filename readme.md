# Memory Leak - php-language-server

## Steps to reproduce:

- download / clone this repo
- `cd` and run `composer install`
- open routes/web.php
- follow the instructions in the comments

## Note:

- Make sure to open up activity monitor **before** the above steps. The php process will climb fast, and you'll have to force quit it unless you want your computer to crash as well.

## Environment:

- php: 7.0.18
- vscode: 1.12.0-insider
- php-intellisense: 1.2.1
