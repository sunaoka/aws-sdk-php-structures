<?php

namespace Sunaoka\Aws\Structures\Glue\GetMLTransforms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'SSE-KMS' $MlUserDataEncryptionMode
 * @property string|null $KmsKeyId
 */
class MLUserDataEncryption extends Shape
{
    /**
     * @param array{
     *     MlUserDataEncryptionMode: 'DISABLED'|'SSE-KMS',
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
