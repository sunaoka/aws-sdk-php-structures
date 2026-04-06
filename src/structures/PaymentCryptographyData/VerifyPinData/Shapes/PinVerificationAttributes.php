<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Ibm3624PinVerification|null $Ibm3624Pin
 * @property VisaPinVerification|null $VisaPin
 */
class PinVerificationAttributes extends Shape
{
    /**
     * @param array{
     *     Ibm3624Pin?: Ibm3624PinVerification|null,
     *     VisaPin?: VisaPinVerification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
