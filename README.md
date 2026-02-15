# AErmolenko Calculator

[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue.svg)](https://www.php.net/)

Простой PHP 8 калькулятор с 4 основными методами: **сложение, вычитание, умножение, деление**.  

---

## Требования

- PHP >= 8.0
- Composer

---

## Установка

Через Composer:

```bash
composer require aermolenko/calculator
```

---
## Использование
```php
<?php

require 'vendor/autoload.php';

use AErmolenko\Calculator\Calculator;

$calculator = new Calculator();

echo $calculator->add(10, 5);
echo $calculator->subtract(10, 5);
echo $calculator->multiply(10, 5);
echo $calculator->divide(10, 5);
```