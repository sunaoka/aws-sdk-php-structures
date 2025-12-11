<?php

namespace Sunaoka\Aws\Structures\S3Vectors\GetIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AES256'|'aws:kms'|null $sseType
 * @property string|null $kmsKeyArn
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     sseType?: 'AES256'|'aws:kms'|null,
     *     kmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
