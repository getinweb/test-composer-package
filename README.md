# Test composer package

Contains simple example class with static method, 
which prepares array to formatted output 

## Requirements

- PHP 7.4

## Installation

```bash
$ composer require getinweb/test-composer-package
```

## Usage

```php
<?php

$arr = [
        'level1' => [
            '1' => 1,
            'level2' => [
                '2' => 2,
                'level3' => 3,
            ],
        ]
    ];

echo PrintProcessor::print_array($arr);

/**
 * Result will be something like this
 * 
 * 'level1' => [
 *     '1' => 1
 *     'level2' => [
 *          '2' => 2
 *          '3' => 3
 *     ]
 *]
*/
```
