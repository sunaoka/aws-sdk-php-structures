<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS' $DataQualityEncryptionMode
 * @property string $KmsKeyArn
 */
class DataQualityEncryption extends Shape
{
    /**
     * @param array{
     *     DataQualityEncryptionMode?: 'DISABLED'|'SSE-KMS',
     *     KmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
