<?php

namespace Sunaoka\Aws\Structures\Billing\ListEnterpriseSupportLinkedAccountCharges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $beginDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 */
class EnterpriseSupportTimePeriod extends Shape
{
    /**
     * @param array{
     *     beginDate: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
