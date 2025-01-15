<?php

namespace Sunaoka\Aws\Structures\CloudWatch\GetMetricStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property double|null $SampleCount
 * @property double|null $Average
 * @property double|null $Sum
 * @property double|null $Minimum
 * @property double|null $Maximum
 * @property 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null $Unit
 * @property array<string, double>|null $ExtendedStatistics
 */
class Datapoint extends Shape
{
    /**
     * @param array{
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     SampleCount?: double|null,
     *     Average?: double|null,
     *     Sum?: double|null,
     *     Minimum?: double|null,
     *     Maximum?: double|null,
     *     Unit?: 'Seconds'|'Microseconds'|'Milliseconds'|'Bytes'|'Kilobytes'|'Megabytes'|'Gigabytes'|'Terabytes'|'Bits'|'Kilobits'|'Megabits'|'Gigabits'|'Terabits'|'Percent'|'Count'|'Bytes/Second'|'Kilobytes/Second'|'Megabytes/Second'|'Gigabytes/Second'|'Terabytes/Second'|'Bits/Second'|'Kilobits/Second'|'Megabits/Second'|'Gigabits/Second'|'Terabits/Second'|'Count/Second'|'None'|null,
     *     ExtendedStatistics?: array<string, double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
