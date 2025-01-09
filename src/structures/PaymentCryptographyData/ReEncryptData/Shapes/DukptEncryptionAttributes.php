<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\ReEncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeySerialNumber
 * @property 'ECB'|'CBC' $Mode
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256' $DukptKeyDerivationType
 * @property 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE' $DukptKeyVariant
 * @property string $InitializationVector
 */
class DukptEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     KeySerialNumber: string,
     *     Mode?: 'ECB'|'CBC',
     *     DukptKeyDerivationType?: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256',
     *     DukptKeyVariant?: 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE',
     *     InitializationVector?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
