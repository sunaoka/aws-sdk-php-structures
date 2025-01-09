<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AcceptEula
 */
class OptimizationModelAccessConfig extends Shape
{
    /**
     * @param array{AcceptEula: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
