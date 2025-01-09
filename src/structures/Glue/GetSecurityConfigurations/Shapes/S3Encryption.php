<?php

namespace Sunaoka\Aws\Structures\Glue\GetSecurityConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS'|'SSE-S3' $S3EncryptionMode
 * @property string $KmsKeyArn
 */
class S3Encryption extends Shape
{
    /**
     * @param array{
     *     S3EncryptionMode?: 'DISABLED'|'SSE-KMS'|'SSE-S3',
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
