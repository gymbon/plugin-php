<?php
define("TEST_CONSTANT", 1);

const OTHER_TEST_CONSTANT = 2;
const ONE = 1;
const TWO = ONE * 2;

$test = TEST_CONSTANT;
$test = OTHER_TEST_CONSTANT;

const FIRST = "Hello", SECOND = "world", THIRD = "!";
const VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_FIRST = "Hello", SECOND = "world", THIRD = "!";
const FIRST = "Hello", VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_SECOND = "world", THIRD = "!";
const VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_FIRST_FIRST = "Hello", VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_SECOND = "world", VERY_VERY_VERY_VERY_VERY_VERY_VERY_LONG_FIRST_THIRD = "!";
