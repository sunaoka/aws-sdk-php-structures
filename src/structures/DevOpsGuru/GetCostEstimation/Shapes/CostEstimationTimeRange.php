<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class CostEstimationTimeRange extends Shape
{
    /**
     * @param array{
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
