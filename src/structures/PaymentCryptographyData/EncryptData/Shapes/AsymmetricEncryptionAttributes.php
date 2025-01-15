<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\EncryptData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PKCS1'|'OAEP_SHA1'|'OAEP_SHA256'|'OAEP_SHA512'|null $PaddingType
 */
class AsymmetricEncryptionAttributes extends Shape
{
    /**
     * @param array{PaddingType?: 'PKCS1'|'OAEP_SHA1'|'OAEP_SHA256'|'OAEP_SHA512'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
