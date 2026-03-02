<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $minScaleDownDelayMinutes
 */
class ComputeScalingPolicy extends Shape
{
    /**
     * @param array{minScaleDownDelayMinutes?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
