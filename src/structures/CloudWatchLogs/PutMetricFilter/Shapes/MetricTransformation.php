<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutMetricFilter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $metricName
 * @property string $metricNamespace
 * @property string $metricValue
 * @property double|null $defaultValue
 * @property array<string, string>|null $dimensions
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $unit
 */
class MetricTransformation extends Shape
{
    /**
     * @param array{
     *     metricName: string,
     *     metricNamespace: string,
     *     metricValue: string,
     *     defaultValue?: double|null,
     *     dimensions?: array<string, string>|null,
     *     unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
