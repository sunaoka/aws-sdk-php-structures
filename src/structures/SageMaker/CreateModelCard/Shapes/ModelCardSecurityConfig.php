<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateModelCard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 */
class ModelCardSecurityConfig extends Shape
{
    /**
     * @param array{KmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
