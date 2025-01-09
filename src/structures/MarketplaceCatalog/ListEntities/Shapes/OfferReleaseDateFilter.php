<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferReleaseDateFilterDateRange $DateRange
 */
class OfferReleaseDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferReleaseDateFilterDateRange} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
