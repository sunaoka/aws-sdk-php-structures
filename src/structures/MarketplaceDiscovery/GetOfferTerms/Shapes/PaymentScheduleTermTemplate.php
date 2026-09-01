<?php

namespace Sunaoka\Aws\Structures\MarketplaceDiscovery\GetOfferTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PaymentScheduleEntry> $schedule
 */
class PaymentScheduleTermTemplate extends Shape
{
    /**
     * @param array{schedule: list<PaymentScheduleEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
