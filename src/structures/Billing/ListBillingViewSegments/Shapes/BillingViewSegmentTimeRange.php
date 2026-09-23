<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViewSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $beginDateInclusive
 * @property \Aws\Api\DateTimeResult|null $endDateExclusive
 */
class BillingViewSegmentTimeRange extends Shape
{
    /**
     * @param array{
     *     beginDateInclusive?: \Aws\Api\DateTimeResult|null,
     *     endDateExclusive?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
