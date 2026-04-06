<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $activeAfterInclusive
 * @property \Aws\Api\DateTimeResult $activeBeforeInclusive
 */
class ActiveTimeRange extends Shape
{
    /**
     * @param array{
     *     activeAfterInclusive: \Aws\Api\DateTimeResult,
     *     activeBeforeInclusive: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
