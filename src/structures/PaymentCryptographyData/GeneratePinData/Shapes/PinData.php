<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PinOffset
 * @property string $VerificationValue
 */
class PinData extends Shape
{
    /**
     * @param array{
     *     PinOffset?: string,
     *     VerificationValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
