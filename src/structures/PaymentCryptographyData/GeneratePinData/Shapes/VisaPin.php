<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $PinVerificationKeyIndex
 */
class VisaPin extends Shape
{
    /**
     * @param array{PinVerificationKeyIndex: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
