<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\VerifyMac\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null $DukptDerivationType
 * @property 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE' $DukptKeyVariant
 * @property string $KeySerialNumber
 */
class MacAlgorithmDukpt extends Shape
{
    /**
     * @param array{
     *     DukptDerivationType?: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null,
     *     DukptKeyVariant: 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE',
     *     KeySerialNumber: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
