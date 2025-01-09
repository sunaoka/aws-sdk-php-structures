<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS' $MlUserDataEncryptionMode
 * @property string $KmsKeyId
 */
class MLUserDataEncryption extends Shape
{
    /**
     * @param array{
     *     MlUserDataEncryptionMode: 'DISABLED'|'SSE-KMS',
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
