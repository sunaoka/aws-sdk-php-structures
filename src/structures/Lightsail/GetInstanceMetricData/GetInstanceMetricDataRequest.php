<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceName
 * @property 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'BurstCapacityTime'|'BurstCapacityPercentage'|'MetadataNoToken' $metricName
 * @property int<60, 86400> $period
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 * @property list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'> $statistics
 */
class GetInstanceMetricDataRequest extends Request
{
    /**
     * @param array{
     *     instanceName: string,
     *     metricName: 'CPUUtilization'|'NetworkIn'|'NetworkOut'|'StatusCheckFailed'|'StatusCheckFailed_Instance'|'StatusCheckFailed_System'|'BurstCapacityTime'|'BurstCapacityPercentage'|'MetadataNoToken',
     *     period: int<60, 86400>,
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     unit: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     statistics: list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
