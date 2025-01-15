<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeLoadBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property int<1, 100>|null $ThresholdsWaitTime
 * @property int<1, 100>|null $IgnoreMetricsTime
 * @property double|null $CpuThreshold
 * @property double|null $MemoryThreshold
 * @property double|null $LoadThreshold
 * @property list<string>|null $Alarms
 */
class AutoScalingThresholds extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     ThresholdsWaitTime?: int<1, 100>|null,
     *     IgnoreMetricsTime?: int<1, 100>|null,
     *     CpuThreshold?: double|null,
     *     MemoryThreshold?: double|null,
     *     LoadThreshold?: double|null,
     *     Alarms?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
