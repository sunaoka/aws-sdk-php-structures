<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS' $CloudWatchEncryptionMode
 * @property string $KmsKeyArn
 */
class CloudWatchEncryption extends Shape
{
    /**
     * @param array{
     *     CloudWatchEncryptionMode?: 'DISABLED'|'SSE-KMS',
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
