<?php
declare(strict_types=1);

namespace EoneoPay\Currencies\Currencies;

use EoneoPay\Currencies\Currency;

class Gtq extends Currency
{
    /**
     * @inheritdoc
     */
    public function getCurrencySymbol(): string
    {
        return "\u{51}";
    }

    /**
     * @inheritdoc
     */
    public function getMinorUnit(): int
    {
        return 2;
    }

    /**
     * @inheritdoc
     */
    public function getName(): string
    {
        return 'Quetzal';
    }

    /**
     * @inheritdoc
     */
    public function getNumericCode(): string
    {
        return '320';
    }
}
