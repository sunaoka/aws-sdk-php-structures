<?php

namespace Sunaoka\Aws\Structures\Braket\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 432000>|null $maxRuntimeInSeconds
 */
class JobStoppingCondition extends Shape
{
    /**
     * @param array{maxRuntimeInSeconds?: int<1, 432000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
