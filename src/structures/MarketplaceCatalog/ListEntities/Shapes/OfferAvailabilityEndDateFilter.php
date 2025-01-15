<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferAvailabilityEndDateFilterDateRange|null $DateRange
 */
class OfferAvailabilityEndDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferAvailabilityEndDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
