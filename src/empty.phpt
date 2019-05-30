<?php

use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

Assert::true(empty(0));
Assert::true(empty(0.0));
Assert::true(empty('0')); // ok, this is maybe 'magic'. Is '0' empty string? I think that no
Assert::true(empty(''));
Assert::true(empty(null));
Assert::true(empty(false));
Assert::true(empty([]));

Assert::false(empty(1));
Assert::false(empty(2));
Assert::false(empty(-1));
Assert::false(empty('null'));
Assert::false(empty('true'));
Assert::false(empty('false'));
Assert::false(empty(true));

Assert::false(empty([0]));
Assert::same(1, count([0]));

Assert::false(empty(['0']));
Assert::same(1, count(['0']));

Assert::false(empty(['']));
Assert::same(1, count(['']));

Assert::false(empty([null]));
Assert::same(1, count([null]));

Assert::false(empty([false]));
Assert::same(1, count([false]));

Assert::false(empty([true]));
Assert::same(1, count([true]));

Assert::false(empty([[]]));
Assert::same(1, count([[]]));

Assert::false(empty([1]));
Assert::same(1, count([1]));

Assert::false(empty([1 => false]));
Assert::same(1, count([1 => false]));

Assert::false(empty([1 => true]));
Assert::same(1, count([1 => true]));

Assert::false(empty([1 => null]));
Assert::same(1, count([1 => null]));

Assert::false(empty([1 => 0]));
Assert::same(1, count([1 => 0]));

Assert::false(empty([1 => 1]));
Assert::same(1, count([1 => 1]));

Assert::false(empty([1 => '']));
Assert::same(1, count([1 => '']));
