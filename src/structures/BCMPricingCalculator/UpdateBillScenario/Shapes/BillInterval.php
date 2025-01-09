<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillScenario\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $start
 * @property \Aws\Api\DateTimeResult $end
 */
class BillInterval extends Shape
{
    /**
     * @param array{
     *     start?: \Aws\Api\DateTimeResult,
     *     end?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
