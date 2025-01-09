<?php

namespace Sunaoka\Aws\Structures\Athena\CreateWorkGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSE_S3'|'SSE_KMS'|'CSE_KMS' $EncryptionOption
 * @property string $KmsKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncryptionOption: 'SSE_S3'|'SSE_KMS'|'CSE_KMS',
     *     KmsKey?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
