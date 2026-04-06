<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationTransactionCounter
 * @property string $CardExpiryDate
 * @property string $PanSequenceNumber
 * @property string $ServiceCode
 */
class DynamicCardVerificationValue extends Shape
{
    /**
     * @param array{
     *     ApplicationTransactionCounter: string,
     *     CardExpiryDate: string,
     *     PanSequenceNumber: string,
     *     ServiceCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
