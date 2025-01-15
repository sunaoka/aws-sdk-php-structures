<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListWorkloadEstimates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $afterTimestamp
 * @property \Aws\Api\DateTimeResult|null $beforeTimestamp
 */
class FilterTimestamp extends Shape
{
    /**
     * @param array{
     *     afterTimestamp?: \Aws\Api\DateTimeResult|null,
     *     beforeTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
