<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 31622400>|null $NextAttemptDelaySeconds
 */
class StepOptions extends Shape
{
    /**
     * @param array{NextAttemptDelaySeconds?: int<1, 31622400>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
