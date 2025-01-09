<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeTimeBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property WeeklyAutoScalingSchedule $AutoScalingSchedule
 */
class TimeBasedAutoScalingConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     AutoScalingSchedule?: WeeklyAutoScalingSchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
