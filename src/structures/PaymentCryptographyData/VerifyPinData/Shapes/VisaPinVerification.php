<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 9> $PinVerificationKeyIndex
 * @property string $VerificationValue
 */
class VisaPinVerification extends Shape
{
    /**
     * @param array{
     *     PinVerificationKeyIndex: int<0, 9>,
     *     VerificationValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
