<?php

namespace Sunaoka\Aws\Structures\PartnerCentralBenefits\GetBenefitAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Amount
 * @property 'AED'|'AMD'|'ARS'|'AUD'|'AWG'|'AZN'|'BBD'|'BDT'|'BGN'|'BMD'|'BND'|'BOB'|'BRL'|'BSD'|'BYR'|'BZD'|'CAD'|'CHF'|'CLP'|'CNY'|'COP'|'CRC'|'CZK'|'DKK'|'DOP'|'EEK'|'EGP'|'EUR'|'GBP'|'GEL'|'GHS'|'GTQ'|'GYD'|'HKD'|'HNL'|'HRK'|'HTG'|'HUF'|'IDR'|'ILS'|'INR'|'ISK'|'JMD'|'JPY'|'KES'|'KHR'|'KRW'|'KYD'|'KZT'|'LBP'|'LKR'|'LTL'|'LVL'|'MAD'|'MNT'|'MOP'|'MUR'|'MVR'|'MXN'|'MYR'|'NAD'|'NGN'|'NIO'|'NOK'|'NZD'|'PAB'|'PEN'|'PHP'|'PKR'|'PLN'|'PYG'|'QAR'|'RON'|'RUB'|'SAR'|'SEK'|'SGD'|'SIT'|'SKK'|'THB'|'TND'|'TRY'|'TTD'|'TWD'|'TZS'|'UAH'|'USD'|'UYU'|'UZS'|'VND'|'XAF'|'XCD'|'XOF'|'XPF'|'ZAR' $CurrencyCode
 */
class MonetaryValue extends Shape
{
    /**
     * @param array{
     *     Amount: string,
     *     CurrencyCode: 'AED'|'AMD'|'ARS'|'AUD'|'AWG'|'AZN'|'BBD'|'BDT'|'BGN'|'BMD'|'BND'|'BOB'|'BRL'|'BSD'|'BYR'|'BZD'|'CAD'|'CHF'|'CLP'|'CNY'|'COP'|'CRC'|'CZK'|'DKK'|'DOP'|'EEK'|'EGP'|'EUR'|'GBP'|'GEL'|'GHS'|'GTQ'|'GYD'|'HKD'|'HNL'|'HRK'|'HTG'|'HUF'|'IDR'|'ILS'|'INR'|'ISK'|'JMD'|'JPY'|'KES'|'KHR'|'KRW'|'KYD'|'KZT'|'LBP'|'LKR'|'LTL'|'LVL'|'MAD'|'MNT'|'MOP'|'MUR'|'MVR'|'MXN'|'MYR'|'NAD'|'NGN'|'NIO'|'NOK'|'NZD'|'PAB'|'PEN'|'PHP'|'PKR'|'PLN'|'PYG'|'QAR'|'RON'|'RUB'|'SAR'|'SEK'|'SGD'|'SIT'|'SKK'|'THB'|'TND'|'TRY'|'TTD'|'TWD'|'TZS'|'UAH'|'USD'|'UYU'|'UZS'|'VND'|'XAF'|'XCD'|'XOF'|'XPF'|'ZAR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
