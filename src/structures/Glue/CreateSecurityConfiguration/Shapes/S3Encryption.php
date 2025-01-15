<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS'|'SSE-S3'|null $S3EncryptionMode
 * @property string|null $KmsKeyArn
 */
class S3Encryption extends Shape
{
    /**
     * @param array{
     *     S3EncryptionMode?: 'DISABLED'|'SSE-KMS'|'SSE-S3'|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
