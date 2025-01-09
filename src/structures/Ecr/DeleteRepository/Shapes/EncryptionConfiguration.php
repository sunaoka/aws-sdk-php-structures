<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'KMS'|'KMS_DSSE' $encryptionType
 * @property string $kmsKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'AES256'|'KMS'|'KMS_DSSE',
     *     kmsKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
