# Валидатор email адреса

Проверка корректности email адреса

## Требования

- PHP 7.0

## Установка

composer require senishinaleksey/validator

## Использование

```php
<?php

$email = 'email@example.com';
SenishinAleksey\Validator\EmailValidator::isValid($email); // true
```
