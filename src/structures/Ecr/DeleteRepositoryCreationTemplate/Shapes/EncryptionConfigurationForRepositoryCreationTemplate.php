<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteRepositoryCreationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'KMS' $encryptionType
 * @property string|null $kmsKey
 */
class EncryptionConfigurationForRepositoryCreationTemplate extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'AES256'|'KMS',
     *     kmsKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
