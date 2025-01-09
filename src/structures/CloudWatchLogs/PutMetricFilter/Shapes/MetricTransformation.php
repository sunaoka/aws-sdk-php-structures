<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutMetricFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metricName
 * @property string $metricNamespace
 * @property string $metricValue
 * @property double $defaultValue
 * @property array<string, string> $dimensions
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $unit
 */
class MetricTransformation extends Shape
{
    /**
     * @param array{
     *     metricName: string,
     *     metricNamespace: string,
     *     metricValue: string,
     *     defaultValue?: double,
     *     dimensions?: array<string, string>,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
