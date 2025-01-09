<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CardExpiryDate
 */
class CardVerificationValue2 extends Shape
{
    /**
     * @param array{CardExpiryDate: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
