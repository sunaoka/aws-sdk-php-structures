<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OfferSetReleaseDateFilterDateRange|null $DateRange
 */
class OfferSetReleaseDateFilter extends Shape
{
    /**
     * @param array{DateRange?: OfferSetReleaseDateFilterDateRange|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
