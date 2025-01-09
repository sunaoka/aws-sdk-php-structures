<?php

namespace Sunaoka\Aws\Structures\MWAA\PublishMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property list<Dimension> $Dimensions
 * @property double $Value
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $Unit
 * @property StatisticSet $StatisticValues
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     Dimensions?: list<Dimension>,
     *     Value?: double,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     StatisticValues?: StatisticSet
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
