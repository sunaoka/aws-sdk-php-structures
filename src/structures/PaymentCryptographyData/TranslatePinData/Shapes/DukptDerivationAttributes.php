<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\TranslatePinData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null $DukptKeyDerivationType
 * @property 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE'|null $DukptKeyVariant
 * @property string $KeySerialNumber
 */
class DukptDerivationAttributes extends Shape
{
    /**
     * @param array{
     *     DukptKeyDerivationType?: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null,
     *     DukptKeyVariant?: 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE'|null,
     *     KeySerialNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
