<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityManagerDimension|null $Dimension
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property list<MetricValue>|null $MetricValues
 */
class MetricDataResult extends Shape
{
    /**
     * @param array{
     *     Dimension?: CapacityManagerDimension|null,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     MetricValues?: list<MetricValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
