<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'aws:kms'|'aws:kms:dsse' $EncryptionType
 * @property string $KMSKeyId
 * @property string $KMSContext
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType: 'AES256'|'aws:kms'|'aws:kms:dsse',
     *     KMSKeyId?: string,
     *     KMSContext?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
