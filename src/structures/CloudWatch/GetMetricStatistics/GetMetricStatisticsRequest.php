<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStatistics;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Namespace
 * @property string $MetricName
 * @property list<Shapes\Dimension> $Dimensions
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Period
 * @property list<'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'> $Statistics
 * @property list<string> $ExtendedStatistics
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $Unit
 */
class GetMetricStatisticsRequest extends Request
{
    /**
     * @param array{
     *     Namespace: string,
     *     MetricName: string,
     *     Dimensions?: list<Shapes\Dimension>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime: \Aws\Api\DateTimeResult,
     *     Period: int,
     *     Statistics?: list<'SampleCount'|'Average'|'Sum'|'Minimum'|'Maximum'>,
     *     ExtendedStatistics?: list<string>,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
