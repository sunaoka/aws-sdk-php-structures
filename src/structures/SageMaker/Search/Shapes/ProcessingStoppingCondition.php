<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 777600> $MaxRuntimeInSeconds
 */
class ProcessingStoppingCondition extends Shape
{
    /**
     * @param array{MaxRuntimeInSeconds: int<1, 777600>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
