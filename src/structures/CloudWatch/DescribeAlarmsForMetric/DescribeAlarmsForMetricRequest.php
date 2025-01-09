<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DescribeAlarmsForMetric;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MetricName
 * @property string $Namespace
 * @property 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum' $Statistic
 * @property string $ExtendedStatistic
 * @property list<Shapes\Dimension> $Dimensions
 * @property int $Period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $Unit
 */
class DescribeAlarmsForMetricRequest extends Request
{
    /**
     * @param array{
     *     MetricName: string,
     *     Namespace: string,
     *     Statistic?: 'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum',
     *     ExtendedStatistic?: string,
     *     Dimensions?: list<Shapes\Dimension>,
     *     Period?: int,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
