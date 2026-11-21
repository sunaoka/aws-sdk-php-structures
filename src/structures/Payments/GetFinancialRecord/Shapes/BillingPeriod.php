<?php

namespace Sunaoka\Aws\Structures\Payments\GetFinancialRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult $endDate
 */
class BillingPeriod extends Shape
{
    /**
     * @param array{
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
