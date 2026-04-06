<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCompilationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $MaxRuntimeInSeconds
 * @property int<1, max>|null $MaxWaitTimeInSeconds
 */
class StoppingCondition extends Shape
{
    /**
     * @param array{
     *     MaxRuntimeInSeconds?: int<1, max>|null,
     *     MaxWaitTimeInSeconds?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
