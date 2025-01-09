<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $StartDate
 * @property \Aws\Api\DateTimeResult $EndDate
 * @property float $Value
 * @property string $Status
 */
class MetricPoint extends Shape
{
    /**
     * @param array{
     *     StartDate?: \Aws\Api\DateTimeResult,
     *     EndDate?: \Aws\Api\DateTimeResult,
     *     Value?: float,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
