<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSE_S3'|'SSE_KMS' $EncryptionMode
 * @property string $KmsKeyArn
 */
class S3EncryptionConfig extends Shape
{
    /**
     * @param array{
     *     EncryptionMode?: 'SSE_S3'|'SSE_KMS',
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
