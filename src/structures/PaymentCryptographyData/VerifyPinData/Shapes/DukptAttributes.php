<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyPinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256' $DukptDerivationType
 * @property string $KeySerialNumber
 */
class DukptAttributes extends Shape
{
    /**
     * @param array{
     *     DukptDerivationType: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256',
     *     KeySerialNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
