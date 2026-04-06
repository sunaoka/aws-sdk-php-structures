<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisaPinVerification|null $VisaPin
 * @property Ibm3624PinVerification|null $Ibm3624Pin
 */
class PinVerificationAttributes extends Shape
{
    /**
     * @param array{
     *     VisaPin?: VisaPinVerification|null,
     *     Ibm3624Pin?: Ibm3624PinVerification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
