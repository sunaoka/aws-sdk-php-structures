<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeTimeBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property WeeklyAutoScalingSchedule|null $AutoScalingSchedule
 */
class TimeBasedAutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     AutoScalingSchedule?: WeeklyAutoScalingSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
