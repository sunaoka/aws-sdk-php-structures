<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null $Statistic
 * @property string|null $ExtendedStatistic
 * @property list<Shapes\Dimension>|null $Dimensions
 * @property int<1, max>|null $Period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 */
class DescribeAlarmsForMetricRequest extends Request
{
    /**
     * @param array{
     *     MetricName: string,
     *     Namespace: string,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'|null,
     *     ExtendedStatistic?: string|null,
     *     Dimensions?: list<Shapes\Dimension>|null,
     *     Period?: int<1, max>|null,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
