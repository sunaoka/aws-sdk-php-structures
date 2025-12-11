<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetentionTriggers|null $RetentionTriggers
 */
class InstanceLifecyclePolicy extends Shape
{
    /**
     * @param array{RetentionTriggers?: RetentionTriggers|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
