<?php

namespace Sunaoka\Aws\Structures\Billing\UpdateBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $beginDateInclusive
 * @property \Aws\Api\DateTimeResult|null $endDateInclusive
 */
class TimeRange extends Shape
{
    /**
     * @param array{
     *     beginDateInclusive?: \Aws\Api\DateTimeResult|null,
     *     endDateInclusive?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
