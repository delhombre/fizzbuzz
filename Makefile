.PHONY: tests

install:
	composer install

tests:
	php vendor/bin/phpunit-watcher watch