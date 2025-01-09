<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MetricName
 * @property list<Dimension> $Dimensions
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property double $Value
 * @property StatisticSet $StatisticValues
 * @property list<double> $Values
 * @property list<double> $Counts
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None' $Unit
 * @property int<1, max> $StorageResolution
 */
class MetricDatum extends Shape
{
    /**
     * @param array{
     *     MetricName: string,
     *     Dimensions?: list<Dimension>,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     Value?: double,
     *     StatisticValues?: StatisticSet,
     *     Values?: list<double>,
     *     Counts?: list<double>,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None',
     *     StorageResolution?: int<1, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
