<?php

namespace Sunaoka\Aws\Structures\Payments\GetPaymentInstrument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VISA'|'MASTERCARD'|'AMEX'|'DISCOVER'|'JCB'|'RUPAY'|'CHINA_UNIONPAY'|null $brand
 * @property string $last4
 * @property int<1, 12>|null $expirationMonth
 * @property int<2000, 2300>|null $expirationYear
 * @property 'CREDIT'|'DEBIT'|null $cardType
 * @property string|null $issuingBank
 * @property string|null $issuerCountry
 */
class Card extends Shape
{
    /**
     * @param array{
     *     brand?: 'VISA'|'MASTERCARD'|'AMEX'|'DISCOVER'|'JCB'|'RUPAY'|'CHINA_UNIONPAY'|null,
     *     last4: string,
     *     expirationMonth?: int<1, 12>|null,
     *     expirationYear?: int<2000, 2300>|null,
     *     cardType?: 'CREDIT'|'DEBIT'|null,
     *     issuingBank?: string|null,
     *     issuerCountry?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
