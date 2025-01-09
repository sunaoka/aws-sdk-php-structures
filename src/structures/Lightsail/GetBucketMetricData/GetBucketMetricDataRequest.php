<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetBucketMetricData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bucketName
 * @property 'BucketSizeBytes'|'NumberOfObjects' $metricName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property int<60, 86400> $period
 * @property list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'> $statistics
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 */
class GetBucketMetricDataRequest extends Request
{
    /**
     * @param array{
     *     bucketName: string,
     *     metricName: 'BucketSizeBytes'|'NumberOfObjects',
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     period: int<60, 86400>,
     *     statistics: list<'Minimum'|'Maximum'|'Sum'|'Average'|'SampleCount'>,
     *     unit: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
