<?php

namespace Sunaoka\Aws\Structures\S3\RestoreObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse' $EncryptionType
 * @property string|null $KMSKeyId
 * @property string|null $KMSContext
 */
class Encryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType: 'AES256'|'aws:fsx'|'aws:kms'|'aws:kms:dsse',
     *     KMSKeyId?: string|null,
     *     KMSContext?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
