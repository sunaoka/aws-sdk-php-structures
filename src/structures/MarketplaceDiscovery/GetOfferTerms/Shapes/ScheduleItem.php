<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $chargeDate
 * @property string $chargeAmount
 */
class ScheduleItem extends Shape
{
    /**
     * @param array{
     *     chargeDate: \Aws\Api\DateTimeResult,
     *     chargeAmount: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
