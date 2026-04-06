<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeySerialNumber
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256' $DukptDerivationType
 */
class DukptAttributes extends Shape
{
    /**
     * @param array{
     *     KeySerialNumber: string,
     *     DukptDerivationType: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
