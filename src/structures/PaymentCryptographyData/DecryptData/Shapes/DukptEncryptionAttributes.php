<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeySerialNumber
 * @property 'ECB'|'CBC'|null $Mode
 * @property 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null $DukptKeyDerivationType
 * @property 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE'|null $DukptKeyVariant
 * @property string|null $InitializationVector
 */
class DukptEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     KeySerialNumber: string,
     *     Mode?: 'ECB'|'CBC'|null,
     *     DukptKeyDerivationType?: 'TDES_2KEY'|'TDES_3KEY'|'AES_128'|'AES_192'|'AES_256'|null,
     *     DukptKeyVariant?: 'BIDIRECTIONAL'|'REQUEST'|'RESPONSE'|null,
     *     InitializationVector?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
