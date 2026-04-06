<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptedPinBlock
 * @property string $DecimalizationTable
 * @property string $PinValidationDataPadCharacter
 * @property string $PinValidationData
 */
class Ibm3624PinOffset extends Shape
{
    /**
     * @param array{
     *     EncryptedPinBlock: string,
     *     DecimalizationTable: string,
     *     PinValidationDataPadCharacter: string,
     *     PinValidationData: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
