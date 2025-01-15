<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'KMS'|'KMS_DSSE' $encryptionType
 * @property string|null $kmsKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     encryptionType: 'AES256'|'KMS'|'KMS_DSSE',
     *     kmsKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
