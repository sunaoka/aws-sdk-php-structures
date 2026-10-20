<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AlarmTagsPropagation|null $AlarmTagsPropagation
 */
class ActionConfiguration extends Shape
{
    /**
     * @param array{AlarmTagsPropagation?: AlarmTagsPropagation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
