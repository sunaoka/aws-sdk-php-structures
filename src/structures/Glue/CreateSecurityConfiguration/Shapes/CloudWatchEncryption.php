<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS'|null $CloudWatchEncryptionMode
 * @property string|null $KmsKeyArn
 */
class CloudWatchEncryption extends Shape
{
    /**
     * @param array{
     *     CloudWatchEncryptionMode?: 'DISABLED'|'SSE-KMS'|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
