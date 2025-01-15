<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SSE_S3'|'SSE_KMS'|'CSE_KMS' $EncryptionOption
 * @property string|null $KmsKey
 */
class EncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncryptionOption: 'SSE_S3'|'SSE_KMS'|'CSE_KMS',
     *     KmsKey?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
