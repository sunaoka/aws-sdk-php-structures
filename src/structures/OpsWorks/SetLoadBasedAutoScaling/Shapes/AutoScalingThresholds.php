<?php

namespace Sunaoka\Aws\Structures\OpsWorks\SetLoadBasedAutoScaling\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InstanceCount
 * @property int $ThresholdsWaitTime
 * @property int $IgnoreMetricsTime
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
     *     ThresholdsWaitTime?: int,
     *     IgnoreMetricsTime?: int,
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
