<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DecimalizationTable
 * @property string $PinValidationDataPadCharacter
 * @property string $PinValidationData
 */
class Ibm3624RandomPin extends Shape
{
    /**
     * @param array{
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
