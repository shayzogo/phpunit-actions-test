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

## Writing and managing tests
Please follow the next rules.
1. Never change already published test.
2. Add tests ONLY in tests folder!
3. Every test should extend TestCase from PHPUnit\Framework\TestsCase
4. A test is a public function starts with the word test
5. All tests methods names must be descriptive no matter what, please look at the example test.