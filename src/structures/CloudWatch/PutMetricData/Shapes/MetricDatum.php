<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property list<Dimension>|null $Dimensions
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property double|null $Value
 * @property StatisticSet|null $StatisticValues
 * @property list<double>|null $Values
 * @property list<double>|null $Counts
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 * @property int<1, max>|null $StorageResolution
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Dimensions?: list<Dimension>|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Value?: double|null,
     *     StatisticValues?: StatisticSet|null,
     *     Values?: list<double>|null,
     *     Counts?: list<double>|null,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     StorageResolution?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
