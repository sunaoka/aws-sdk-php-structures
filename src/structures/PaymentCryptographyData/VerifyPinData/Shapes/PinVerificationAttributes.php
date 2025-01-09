<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property VisaPinVerification $VisaPin
 * @property Ibm3624PinVerification $Ibm3624Pin
 */
class PinVerificationAttributes extends Shape
{
    /**
     * @param array{
     *     VisaPin?: VisaPinVerification,
     *     Ibm3624Pin?: Ibm3624PinVerification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
