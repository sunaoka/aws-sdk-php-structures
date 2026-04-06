<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateInferenceComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnableCaching
 */
class InferenceComponentDataCacheConfig extends Shape
{
    /**
     * @param array{EnableCaching: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
