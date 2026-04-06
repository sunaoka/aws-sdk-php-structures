<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferReleaseDateFilterDateRange|null $DateRange
 */
class OfferReleaseDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferReleaseDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
