<?php

namespace Sunaoka\Aws\Structures\Billing\ListContractualInvestments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startDateInclusive
 * @property \Aws\Api\DateTimeResult $endDateInclusive
 */
class Interval extends Shape
{
    /**
     * @param array{
     *     startDateInclusive: \Aws\Api\DateTimeResult,
     *     endDateInclusive: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
