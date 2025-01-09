<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceName
 * @property 'CPUUtilization'|'MemoryUtilization' $metricName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int $period
 * @property list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'> $statistics
 */
class GetContainerServiceMetricDataRequest extends Request
{
    /**
     * @param array{
     *     serviceName: string,
     *     metricName: 'CPUUtilization'|'MemoryUtilization',
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     period: int,
     *     statistics: list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
