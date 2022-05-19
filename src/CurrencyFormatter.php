<?php

namespace Innowaysit\CurrencyFormatter;

use NumberFormatter;
use UnexpectedValueException;

class CurrencyFormatter
{
    protected static $currencies = ['INR', 'USD'];
    /**
     * Method format
     *
     * @param $amount $amount as int
     * @param $target_format $target_format as string
     *
     * @return string
     */
    public static function format($amount = 0, $target_format = 'INR'): string
    {
        $currencies = self::$currencies;

        if (!in_array($target_format, $currencies)) {
            throw new UnexpectedValueException($target_format . " is currently not supported.");
        }

        $locale = 'en_IN';
        switch ($target_format) {
            case 'USD':
                $locale = 'en_US';
            default:
                $locale = 'en_IN';
        }

        $formatter = new NumberFormatter($locale, NumberFormatter::CURRENCY);
        $formatter->setSymbol(NumberFormatter::CURRENCY_SYMBOL, '');
        return (string) $formatter->format($amount);
    }
}
