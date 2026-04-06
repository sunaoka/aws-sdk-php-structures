<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $CopyCount
 */
class InferenceComponentRuntimeConfig extends Shape
{
    /**
     * @param array{CopyCount: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
