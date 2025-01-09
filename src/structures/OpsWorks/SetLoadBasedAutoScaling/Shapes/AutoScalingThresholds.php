<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetLoadBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property int<1, 100> $ThresholdsWaitTime
 * @property int<1, 100> $IgnoreMetricsTime
 * @property double $CpuThreshold
 * @property double $MemoryThreshold
 * @property double $LoadThreshold
 * @property list<string> $Alarms
 */
class AutoScalingThresholds extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int,
     *     ThresholdsWaitTime?: int<1, 100>,
     *     IgnoreMetricsTime?: int<1, 100>,
     *     CpuThreshold?: double,
     *     MemoryThreshold?: double,
     *     LoadThreshold?: double,
     *     Alarms?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
