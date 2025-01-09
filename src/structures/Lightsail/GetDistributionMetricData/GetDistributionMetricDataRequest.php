<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $distributionName
 * @property 'Requests'|'BytesDownloaded'|'BytesUploaded'|'TotalErrorRate'|'Http4xxErrorRate'|'Http5xxErrorRate' $metricName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<60, 86400> $period
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 * @property list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'> $statistics
 */
class GetDistributionMetricDataRequest extends Request
{
    /**
     * @param array{
     *     distributionName: string,
     *     metricName: 'Requests'|'BytesDownloaded'|'BytesUploaded'|'TotalErrorRate'|'Http4xxErrorRate'|'Http5xxErrorRate',
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     period: int<60, 86400>,
     *     unit: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     statistics: list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
