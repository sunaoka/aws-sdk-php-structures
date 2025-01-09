<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GeneratePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisaPin $VisaPin
 * @property VisaPinVerificationValue $VisaPinVerificationValue
 * @property Ibm3624PinOffset $Ibm3624PinOffset
 * @property Ibm3624NaturalPin $Ibm3624NaturalPin
 * @property Ibm3624RandomPin $Ibm3624RandomPin
 * @property Ibm3624PinFromOffset $Ibm3624PinFromOffset
 */
class PinGenerationAttributes extends Shape
{
    /**
     * @param array{
     *     VisaPin?: VisaPin,
     *     VisaPinVerificationValue?: VisaPinVerificationValue,
     *     Ibm3624PinOffset?: Ibm3624PinOffset,
     *     Ibm3624NaturalPin?: Ibm3624NaturalPin,
     *     Ibm3624RandomPin?: Ibm3624RandomPin,
     *     Ibm3624PinFromOffset?: Ibm3624PinFromOffset
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
