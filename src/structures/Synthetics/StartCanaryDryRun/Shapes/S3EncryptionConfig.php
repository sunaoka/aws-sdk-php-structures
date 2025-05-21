<?php

namespace Sunaoka\Aws\Structures\Synthetics\StartCanaryDryRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSE_S3'|'SSE_KMS'|null $EncryptionMode
 * @property string|null $KmsKeyArn
 */
class S3EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     EncryptionMode?: 'SSE_S3'|'SSE_KMS'|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
