<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptedPinBlock
 * @property int<0, 6> $PinVerificationKeyIndex
 */
class VisaPinVerificationValue extends Shape
{
    /**
     * @param array{
     *     EncryptedPinBlock: string,
     *     PinVerificationKeyIndex: int<0, 6>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
