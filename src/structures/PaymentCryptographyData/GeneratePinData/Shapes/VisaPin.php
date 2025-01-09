<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 6> $PinVerificationKeyIndex
 */
class VisaPin extends Shape
{
    /**
     * @param array{PinVerificationKeyIndex: int<0, 6>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
