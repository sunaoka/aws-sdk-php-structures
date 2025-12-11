<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USD'|'EUR'|'GBP'|'AUD'|'CAD'|'CNY'|'NZD'|'INR'|'JPY'|'CHF'|'SEK'|'AED'|'AFN'|'ALL'|'AMD'|'ANG'|'AOA'|'ARS'|'AWG'|'AZN'|'BAM'|'BBD'|'BDT'|'BGN'|'BHD'|'BIF'|'BMD'|'BND'|'BOB'|'BOV'|'BRL'|'BSD'|'BTN'|'BWP'|'BYN'|'BZD'|'CDF'|'CHE'|'CHW'|'CLF'|'CLP'|'COP'|'COU'|'CRC'|'CUC'|'CUP'|'CVE'|'CZK'|'DJF'|'DKK'|'DOP'|'DZD'|'EGP'|'ERN'|'ETB'|'FJD'|'FKP'|'GEL'|'GHS'|'GIP'|'GMD'|'GNF'|'GTQ'|'GYD'|'HKD'|'HNL'|'HRK'|'HTG'|'HUF'|'IDR'|'ILS'|'IQD'|'IRR'|'ISK'|'JMD'|'JOD'|'KES'|'KGS'|'KHR'|'KMF'|'KPW'|'KRW'|'KWD'|'KYD'|'KZT'|'LAK'|'LBP'|'LKR'|'LRD'|'LSL'|'LYD'|'MAD'|'MDL'|'MGA'|'MKD'|'MMK'|'MNT'|'MOP'|'MRU'|'MUR'|'MVR'|'MWK'|'MXN'|'MXV'|'MYR'|'MZN'|'NAD'|'NGN'|'NIO'|'NOK'|'NPR'|'OMR'|'PAB'|'PEN'|'PGK'|'PHP'|'PKR'|'PLN'|'PYG'|'QAR'|'RON'|'RSD'|'RUB'|'RWF'|'SAR'|'SBD'|'SCR'|'SDG'|'SGD'|'SHP'|'SLL'|'SOS'|'SRD'|'SSP'|'STN'|'SVC'|'SYP'|'SZL'|'THB'|'TJS'|'TMT'|'TND'|'TOP'|'TRY'|'TTD'|'TWD'|'TZS'|'UAH'|'UGX'|'USN'|'UYI'|'UYU'|'UZS'|'VEF'|'VND'|'VUV'|'WST'|'XAF'|'XCD'|'XDR'|'XOF'|'XPF'|'XSU'|'XUA'|'YER'|'ZAR'|'ZMW'|'ZWL' $CurrencyCode
 * @property 'Monthly' $Frequency
 * @property string|null $TotalAmount
 * @property string|null $TotalOptimizedAmount
 * @property string|null $TotalPotentialSavingsAmount
 * @property array<string, string> $TotalAmountByCategory
 * @property list<AwsProductDetails> $AwsProducts
 */
class AwsProductInsights extends Shape
{
    /**
     * @param array{
     *     CurrencyCode: 'USD'|'EUR'|'GBP'|'AUD'|'CAD'|'CNY'|'NZD'|'INR'|'JPY'|'CHF'|'SEK'|'AED'|'AFN'|'ALL'|'AMD'|'ANG'|'AOA'|'ARS'|'AWG'|'AZN'|'BAM'|'BBD'|'BDT'|'BGN'|'BHD'|'BIF'|'BMD'|'BND'|'BOB'|'BOV'|'BRL'|'BSD'|'BTN'|'BWP'|'BYN'|'BZD'|'CDF'|'CHE'|'CHW'|'CLF'|'CLP'|'COP'|'COU'|'CRC'|'CUC'|'CUP'|'CVE'|'CZK'|'DJF'|'DKK'|'DOP'|'DZD'|'EGP'|'ERN'|'ETB'|'FJD'|'FKP'|'GEL'|'GHS'|'GIP'|'GMD'|'GNF'|'GTQ'|'GYD'|'HKD'|'HNL'|'HRK'|'HTG'|'HUF'|'IDR'|'ILS'|'IQD'|'IRR'|'ISK'|'JMD'|'JOD'|'KES'|'KGS'|'KHR'|'KMF'|'KPW'|'KRW'|'KWD'|'KYD'|'KZT'|'LAK'|'LBP'|'LKR'|'LRD'|'LSL'|'LYD'|'MAD'|'MDL'|'MGA'|'MKD'|'MMK'|'MNT'|'MOP'|'MRU'|'MUR'|'MVR'|'MWK'|'MXN'|'MXV'|'MYR'|'MZN'|'NAD'|'NGN'|'NIO'|'NOK'|'NPR'|'OMR'|'PAB'|'PEN'|'PGK'|'PHP'|'PKR'|'PLN'|'PYG'|'QAR'|'RON'|'RSD'|'RUB'|'RWF'|'SAR'|'SBD'|'SCR'|'SDG'|'SGD'|'SHP'|'SLL'|'SOS'|'SRD'|'SSP'|'STN'|'SVC'|'SYP'|'SZL'|'THB'|'TJS'|'TMT'|'TND'|'TOP'|'TRY'|'TTD'|'TWD'|'TZS'|'UAH'|'UGX'|'USN'|'UYI'|'UYU'|'UZS'|'VEF'|'VND'|'VUV'|'WST'|'XAF'|'XCD'|'XDR'|'XOF'|'XPF'|'XSU'|'XUA'|'YER'|'ZAR'|'ZMW'|'ZWL',
     *     Frequency: 'Monthly',
     *     TotalAmount?: string|null,
     *     TotalOptimizedAmount?: string|null,
     *     TotalPotentialSavingsAmount?: string|null,
     *     TotalAmountByCategory: array<string, string>,
     *     AwsProducts: list<AwsProductDetails>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
