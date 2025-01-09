<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardExpiryDate
 * @property string $ServiceCode
 */
class CardVerificationValue1 extends Shape
{
    /**
     * @param array{
     *     CardExpiryDate: string,
     *     ServiceCode: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
