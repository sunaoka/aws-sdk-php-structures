<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CopyCount
 */
class InferenceComponentRuntimeConfig extends Shape
{
    /**
     * @param array{CopyCount: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
