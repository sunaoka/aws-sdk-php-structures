<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property list<Dimension>|null $Dimensions
 * @property double|null $Value
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 * @property StatisticSet|null $StatisticValues
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     Dimensions?: list<Dimension>|null,
     *     Value?: double|null,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     StatisticValues?: StatisticSet|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
