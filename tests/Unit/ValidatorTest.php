<?php

use Core\Validator;

it('validates a string', function () {
    expect(\Core\Validator::string('foobar'))->toBeTrue();
    expect(\Core\Validator::string(false))->toBeFalse();
    expect(\Core\Validator::string(''))->toBeFalse();
});

it('validates a string with a minimum length', function () {
    expect(\Core\Validator::string('foobar', 20))->toBeFalse();
});

it('validates a email', function () {
    expect(\Core\Validator::email('noespa@gmail.com'))->toBeTrue();
});

it('validate teh number is greater than a given amount', function () {
    expect(\Core\Validator::greaterThan(10, 1))->toBeTrue();
    expect(\Core\Validator::greaterThan(10, 11))->toBeFalse();
});
