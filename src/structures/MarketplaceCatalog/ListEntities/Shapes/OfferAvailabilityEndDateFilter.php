<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferAvailabilityEndDateFilterDateRange $DateRange
 */
class OfferAvailabilityEndDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferAvailabilityEndDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
