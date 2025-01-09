<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maxRuntimeInSeconds
 */
class JobStoppingCondition extends Shape
{
    /**
     * @param array{maxRuntimeInSeconds?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
