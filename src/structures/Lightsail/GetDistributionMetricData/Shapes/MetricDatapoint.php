<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributionMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $average
 * @property double|null $maximum
 * @property double|null $minimum
 * @property double|null $sampleCount
 * @property double|null $sum
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $unit
 */
class MetricDatapoint extends Shape
{
    /**
     * @param array{
     *     average?: double|null,
     *     maximum?: double|null,
     *     minimum?: double|null,
     *     sampleCount?: double|null,
     *     sum?: double|null,
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
