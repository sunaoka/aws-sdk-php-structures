<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PinOffset
 * @property string|null $VerificationValue
 */
class PinData extends Shape
{
    /**
     * @param array{
     *     PinOffset?: string|null,
     *     VerificationValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
