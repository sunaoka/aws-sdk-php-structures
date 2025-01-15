<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAwsNetworkPerformanceData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property float|null $Value
 * @property string|null $Status
 */
class MetricPoint extends Shape
{
    /**
     * @param array{
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     Value?: float|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
