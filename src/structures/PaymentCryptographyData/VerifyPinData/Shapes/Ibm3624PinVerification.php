<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DecimalizationTable
 * @property string $PinValidationDataPadCharacter
 * @property string $PinValidationData
 * @property string $PinOffset
 */
class Ibm3624PinVerification extends Shape
{
    /**
     * @param array{
     *     DecimalizationTable: string,
     *     PinValidationDataPadCharacter: string,
     *     PinValidationData: string,
     *     PinOffset: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
