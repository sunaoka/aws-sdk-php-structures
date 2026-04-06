<?php

namespace Sunaoka\Aws\Structures\Braket\CreateSpendingLimit\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $startAt
 * @property \Aws\Api\DateTimeResult $endAt
 */
class TimePeriod extends Shape
{
    /**
     * @param array{
     *     startAt: \Aws\Api\DateTimeResult,
     *     endAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
