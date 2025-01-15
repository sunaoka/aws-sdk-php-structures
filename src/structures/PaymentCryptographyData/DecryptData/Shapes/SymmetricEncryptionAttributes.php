<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\DecryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ECB'|'CBC'|'CFB'|'CFB1'|'CFB8'|'CFB64'|'CFB128'|'OFB' $Mode
 * @property string|null $InitializationVector
 * @property 'PKCS1'|'OAEP_SHA1'|'OAEP_SHA256'|'OAEP_SHA512'|null $PaddingType
 */
class SymmetricEncryptionAttributes extends Shape
{
    /**
     * @param array{
     *     Mode: 'ECB'|'CBC'|'CFB'|'CFB1'|'CFB8'|'CFB64'|'CFB128'|'OFB',
     *     InitializationVector?: string|null,
     *     PaddingType?: 'PKCS1'|'OAEP_SHA1'|'OAEP_SHA256'|'OAEP_SHA512'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
