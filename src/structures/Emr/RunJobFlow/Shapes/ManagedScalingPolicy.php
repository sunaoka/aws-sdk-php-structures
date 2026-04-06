<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeLimits|null $ComputeLimits
 */
class ManagedScalingPolicy extends Shape
{
    /**
     * @param array{ComputeLimits?: ComputeLimits|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
