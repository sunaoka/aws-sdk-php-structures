<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aws:kms'|'AES256'|null $EncryptionType
 * @property string|null $KMSKeyId
 * @property string|null $KMSContext
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: 'aws:kms'|'AES256'|null,
     *     KMSKeyId?: string|null,
     *     KMSContext?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
