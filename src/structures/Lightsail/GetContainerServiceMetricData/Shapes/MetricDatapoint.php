<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetContainerServiceMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $average
 * @property double $maximum
 * @property double $minimum
 * @property double $sampleCount
 * @property double $sum
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 */
class MetricDatapoint extends Shape
{
    /**
     * @param array{
     *     average?: double,
     *     maximum?: double,
     *     minimum?: double,
     *     sampleCount?: double,
     *     sum?: double,
     *     timestamp?: \Aws\Api\DateTimeResult,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
