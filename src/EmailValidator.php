<?php

namespace SenishinAleksey\Validator;

class EmailValidator
{
    /**
     * Проверяет корректность email-адреса
     *
     * @param  string  $email  Email-адрес для проверки
     * @return bool Возвращает true, если email корректен, иначе false
     */
    public static function isValid(string $email): bool
    {
        if (empty($email)) {
            return false;
        }

        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
