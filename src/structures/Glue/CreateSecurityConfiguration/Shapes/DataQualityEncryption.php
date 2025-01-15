<?php

namespace Sunaoka\Aws\Structures\Glue\CreateSecurityConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS'|null $DataQualityEncryptionMode
 * @property string|null $KmsKeyArn
 */
class DataQualityEncryption extends Shape
{
    /**
     * @param array{
     *     DataQualityEncryptionMode?: 'DISABLED'|'SSE-KMS'|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
