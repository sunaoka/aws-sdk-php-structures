<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisaPin|null $VisaPin
 * @property VisaPinVerificationValue|null $VisaPinVerificationValue
 * @property Ibm3624PinOffset|null $Ibm3624PinOffset
 * @property Ibm3624NaturalPin|null $Ibm3624NaturalPin
 * @property Ibm3624RandomPin|null $Ibm3624RandomPin
 * @property Ibm3624PinFromOffset|null $Ibm3624PinFromOffset
 */
class PinGenerationAttributes extends Shape
{
    /**
     * @param array{
     *     VisaPin?: VisaPin|null,
     *     VisaPinVerificationValue?: VisaPinVerificationValue|null,
     *     Ibm3624PinOffset?: Ibm3624PinOffset|null,
     *     Ibm3624NaturalPin?: Ibm3624NaturalPin|null,
     *     Ibm3624RandomPin?: Ibm3624RandomPin|null,
     *     Ibm3624PinFromOffset?: Ibm3624PinFromOffset|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
