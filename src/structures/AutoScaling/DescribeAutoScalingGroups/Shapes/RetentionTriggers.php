<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'retain'|'terminate'|null $TerminateHookAbandon
 */
class RetentionTriggers extends Shape
{
    /**
     * @param array{TerminateHookAbandon?: 'retain'|'terminate'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
