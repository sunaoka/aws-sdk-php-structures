<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PanSequenceNumber
 * @property string $CardExpiryDate
 * @property string $ServiceCode
 * @property string $ApplicationTransactionCounter
 */
class DynamicCardVerificationValue extends Shape
{
    /**
     * @param array{
     *     PanSequenceNumber: string,
     *     CardExpiryDate: string,
     *     ServiceCode: string,
     *     ApplicationTransactionCounter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
