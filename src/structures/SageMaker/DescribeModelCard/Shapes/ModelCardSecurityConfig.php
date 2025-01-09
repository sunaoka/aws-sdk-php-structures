<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelCard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KmsKeyId
 */
class ModelCardSecurityConfig extends Shape
{
    /**
     * @param array{KmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
