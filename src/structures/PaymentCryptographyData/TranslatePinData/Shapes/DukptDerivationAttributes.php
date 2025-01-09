<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeySerialNumber
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256' $DukptKeyDerivationType
 * @property 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE' $DukptKeyVariant
 */
class DukptDerivationAttributes extends Shape
{
    /**
     * @param array{
     *     KeySerialNumber: string,
     *     DukptKeyDerivationType?: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256',
     *     DukptKeyVariant?: 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
