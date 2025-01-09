<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillScenarios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $afterTimestamp
 * @property \Aws\Api\DateTimeResult $beforeTimestamp
 */
class FilterTimestamp extends Shape
{
    /**
     * @param array{
     *     afterTimestamp?: \Aws\Api\DateTimeResult,
     *     beforeTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
