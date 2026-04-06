<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DecimalizationTable
 * @property string $PinValidationData
 * @property string $PinValidationDataPadCharacter
 */
class Ibm3624RandomPin extends Shape
{
    /**
     * @param array{
     *     DecimalizationTable: string,
     *     PinValidationData: string,
     *     PinValidationDataPadCharacter: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
