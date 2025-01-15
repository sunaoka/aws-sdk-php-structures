<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeySerialNumber
 * @property 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE' $DukptKeyVariant
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null $DukptDerivationType
 */
class MacAlgorithmDukpt extends Shape
{
    /**
     * @param array{
     *     KeySerialNumber: string,
     *     DukptKeyVariant: 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE',
     *     DukptDerivationType?: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
