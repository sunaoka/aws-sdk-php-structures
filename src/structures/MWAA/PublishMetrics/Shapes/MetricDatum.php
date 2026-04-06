<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Dimension>|null $Dimensions
 * @property string $MetricName
 * @property StatisticSet|null $StatisticValues
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 * @property double|null $Value
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     Dimensions?: list<Dimension>|null,
     *     MetricName: string,
     *     StatisticValues?: StatisticSet|null,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
