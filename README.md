# PHPUnit for github actions tests

## Run PHPUnit for the first time
> Those steps need to be in github actions to proper system checking and tests

To run php unit you need to run
```shell
./vendor/phpunit/phpunit/phpunit
```
So if you dont want to write it every time create phpunit alias
```shell
alias phpunit="./vendor/phpunit/phpunit/phpunit"
```
Now, you can run phpunit with 
```shell
phpunit
```